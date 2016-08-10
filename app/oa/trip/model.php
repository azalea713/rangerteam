<?php
/**
 * The model file of trip module of Ranzhi.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      chujilu <chujilu@cnezsoft.com>
 * @package     trip
 * @version     $Id$
 * @link        http://www.ranzhico.com
 */
class tripModel extends model
{
    /**
     * Get a trip by id. 
     * 
     * @param  int    $id 
     * @access public
     * @return object
     */
    public function getById($id)
    {
        return $this->dao->select('*')->from(TABLE_TRIP)->where('id')->eq($id)->fetch();
    }

    /**
     * Get leave by date and account.
     * 
     * @param  string    $date 
     * @param  string    $account 
     * @access public
     * @return object
     */
    public function getByDate($date, $account)
    {
        return $this->dao->select('*')->from(TABLE_TRIP)->where('begin')->le($date)->andWhere('end')->ge($date)->andWhere('createdBy')->eq($account)->fetch();
    }

    /**
     * Get trip list. 
     * 
     * @param  string $year 
     * @param  string $month 
     * @param  string $account 
     * @param  string $dept 
     * @param  string $orderBy
     * @access public
     * @return array
     */
    public function getList($year = '', $month = '', $account = '', $dept = '', $orderBy = 'id_desc')
    {
        return $this->dao->select('t1.*, t2.realname, t2.dept')->from(TABLE_TRIP)->alias('t1')->leftJoin(TABLE_USER)->alias('t2')->on("t1.createdBy=t2.account")
            ->where('1=1')
            ->beginIf($year != '')->andWhere('t1.year')->eq($year)->fi()
            ->beginIf($month != '')->andWhere('t1.begin')->like("%-$month-%")->fi()
            ->beginIf($account != '')->andWhere('t1.createdBy')->eq($account)->fi()
            ->beginIf($dept != '')->andWhere('t2.dept')->in($dept)->fi()
            ->orderBy("t2.dept,t1.{$orderBy}")
            ->fetchAll();
    }

    /**
     * Get all month of trip's begin.
     * 
     * @access public
     * @return array
     */
    public function getAllMonth()
    {
        $monthList = array();
        $dateList  = $this->dao->select('begin')->from(TABLE_TRIP)->groupBy('begin')->orderBy('begin_asc')->fetchAll('begin');
        foreach($dateList as $date)
        {
            $year  = substr($date->begin, 0, 4);
            $month = substr($date->begin, 5, 2);
            if(!isset($monthList[$year][$month])) $monthList[$year][$month] = $month;
        }
        return $monthList;
    }

    /**
     * Get list by date.
     * 
     * @param  int    $date 
     * @param  int    $account 
     * @access public
     * @return void
     */
    public function getListByDate($date, $account)
    {
        $begin = strtolower($date['begin']);
        $end   = strtolower($date['end']);

        return $this->dao->select('*')->from(TABLE_TRIP)
            ->where('createdBy')->eq($account)
            ->andWhere('begin')->ge($begin)
            ->andWhere('end')->le($end)
            ->fetchAll();
    }

    /**
     * Check trip.
     * 
     * @param  object $currentTrip
     * @param  string $account 
     * @param  int    $id
     * @access public
     * @return bool 
     */
    public function checkTrip($currentTrip = null, $account = '', $id = 0)
    {
        $beginTime = date('Y-m-d H:i:s', strtotime($currentTrip->begin . ' ' . $currentTrip->start));
        $endTime   = date('Y-m-d H:i:s', strtotime($currentTrip->end   . ' ' . $currentTrip->finish));
        $tripList  = $this->getList($year = '', $month = '', $account, $dept = '', $orderBy = 'begin, start');
        $existTrip = array();
        foreach($tripList as $trip)
        {
            if($trip->id == $id) continue;

            $begin = $trip->begin . ' ' . $trip->start;
            $end   = $trip->end   . ' ' . $trip->finish;
            if(($beginTime > $begin && $beginTime < $end) 
                || ($endTime > $begin && $endTime < $end) 
                || ($beginTime <= $begin && $endTime >= $end))
            {
                $existTrip[] = substr($begin, 0, 16) . ' ~ ' . substr($end, 0, 16);
            }
        }
        return $existTrip;
    }

    /**
     * Create a trip.
     * 
     * @access public
     * @return bool
     */
    public function create()
    {
        $trip = fixer::input('post')
            ->add('createdBy', $this->app->user->account)
            ->add('createdDate', helper::now())
            ->get();
        if(isset($trip->begin) and $trip->begin != '') $trip->year = substr($trip->begin, 0, 4);

        $existTrip = $this->checkTrip($trip, $this->app->user->account); 
        if(!empty($existTrip)) return array('result' => 'fail', 'message' => sprintf($this->lang->trip->unique, implode(', ', $existTrip))); 
        
        $leave = clone $trip;
        $leave ->start  = '00:00:00';
        $leave ->finish = '23:59:59';
        $existLeave = $this->loadModel('leave')->checkLeave($leave, $this->app->user->account);
        if(!empty($existLeave)) return array('result' => 'fail', 'message' => sprintf($this->lang->leave->unique, implode(', ', $existLeave))); 
        
        $overtime = $leave;
        $existOvertime = $this->loadModel('overtime')->checkOvertime($overtime, $this->app->user->account);
        if(!empty($existOvertime)) return array('result' => 'fail', 'message' => sprintf($this->lang->overtime->unique, implode(', ', $existOvertime))); 

        $this->dao->insert(TABLE_TRIP)
            ->data($trip)
            ->autoCheck()
            ->batchCheck($this->config->trip->require->create, 'notempty')
            ->check('end', 'ge', $trip->begin)
            ->exec();

        return $this->dao->lastInsertID();
    }

    /**
     * update trip.
     * 
     * @param  int    $id 
     * @access public
     * @return bool
     */
    public function update($id)
    {
        $oldTrip = $this->getByID($id);

        $trip = fixer::input('post')
            ->remove('createdBy')
            ->remove('createdDate')
            ->get();
        if(isset($trip->begin) and $trip->begin != '') $trip->year = substr($trip->begin, 0, 4);

        $existTrip = $this->checkTrip($trip, $this->app->user->account, $id); 
        if(!empty($existTrip)) return array('result' => 'fail', 'message' => sprintf($this->lang->trip->unique, implode(', ', $existTrip))); 
        
        $leave = clone $trip;
        $leave ->start  = '00:00:00';
        $leave ->finish = '23:59:59';
        $existLeave = $this->loadModel('leave')->checkLeave($leave, $this->app->user->account);
        if(!empty($existLeave)) return array('result' => 'fail', 'message' => sprintf($this->lang->leave->unique, implode(', ', $existLeave))); 
        
        $overtime = $leave;
        $existOvertime = $this->loadModel('overtime')->checkOvertime($overtime, $this->app->user->account);
        if(!empty($existOvertime)) return array('result' => 'fail', 'message' => sprintf($this->lang->overtime->unique, implode(', ', $existOvertime))); 

        $this->dao->update(TABLE_TRIP)
            ->data($trip)
            ->autoCheck()
            ->batchCheck($this->config->trip->require->edit, 'notempty')
            ->check('end', 'ge', $trip->begin)
            ->where('id')->eq($id)
            ->exec();

        return !dao::isError();
    }

    /**
     * Check date is in trip. 
     * 
     * @param  string $date 
     * @param  string $account 
     * @access public
     * @return bool
     */
    public function isTrip($date, $account)
    {
        static $tripList = array();
        if(!isset($tripList[$account])) $tripList[$account] = $this->getList($year = '', $month = '', $account);

        foreach($tripList[$account] as $trip)
        {
            if(strtotime($date) >= strtotime($trip->begin) and strtotime($date) <= strtotime($trip->end)) return true;
        }

        return false;
    }

    /**
     * delete trip.
     * 
     * @param  int    $id 
     * @access public
     * @return bool
     */
    public function delete($id, $null = null)
    {
        $oldTrip  = $this->getByID($id);

        $this->dao->delete()->from(TABLE_TRIP)->where('id')->eq($id)->exec();

        if(!dao::isError())
        {
            $oldDates = range(strtotime($oldTrip->begin), strtotime($oldTrip->end), 60*60*24);
            $this->loadModel('attend')->batchUpdate($oldDates, $oldTrip->createdBy, '');
        }

        return !dao::isError();
    }
}
