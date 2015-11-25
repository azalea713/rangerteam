<?php
/**
 * The control file of my module of RanZhi.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     my
 * @version     $Id$
 * @link        http://www.ranzhico.com
 */
class my extends control
{
    /**
     * review 
     * 
     * @param  string $type 
     * @param  string $orderBy 
     * @access public
     * @return void
     */
    public function review($type = 'attend', $orderBy = 'status')
    {
        $this->loadModel('attend', 'oa');
        $this->loadModel('leave', 'oa');
        $this->loadModel('refund', 'oa');
        $account = $this->app->user->account;

        /* Get dept info. */
        $allDeptList = $this->loadModel('tree')->getPairs('', 'dept');
        $allDeptList['0'] = '/';
        $managedDeptList = array();
        $tmpDept = $this->loadModel('tree')->getDeptManagedByMe($account);
        foreach($tmpDept as $d) $managedDeptList[$d->id] = $d->name;

        /* Get deptments managed by me. used when get attend and leave. */
        $deptList = array();
        if(!empty($this->config->attend->reviewedBy) and $this->config->attend->reviewedBy == $account) $deptList = $allDeptList;
        if(empty($this->config->attend->reviewedBy)) $deptList = $managedDeptList;

        /* Get attend list. */
        $attends  = array();
        if($type == 'attend' and !empty($deptList)) $attends = $this->attend->getWaitAttends(array_keys($deptList));
        
        /* Get leave list. */
        $leaves = array();
        if($type == 'leave' and !empty($deptList)) $leaves = $this->leave->getList('browseReview', $year = '', $month = '', '', array_keys($deptList), $status = 'wait', $orderBy);

        /* Get refund list. */
        $refunds = array();
        if($type == 'refund')
        {
            /* Get refund list for secondReviewer. */
            $secondRefunds = array();
            if(!empty($this->config->refund->secondReviewer) and $this->config->refund->secondReviewer == $account)
            {
                $secondRefunds = $this->refund->getList($mode = 'browseReview', $deptIDList = '', 'doing');
            }

            /* Get refund list for firstReviewer. */
            $firstRefunds = array();
            if(!empty($this->config->refund->firstReviewer) and $this->config->refund->firstReviewer == $account)
            {
                $deptList = $allDeptList;
            }
            else if(empty($this->config->refund->firstReviewer))
            {
                $deptList = $managedDeptList;
            }
            if(!empty($deptList)) $firstRefunds = $this->refund->getList($mode = 'browseReview', $deptIDList = array_keys($deptList), 'wait');
            $refunds = array_merge($secondRefunds, $firstRefunds);
        }

        $this->view->title        = $this->lang->refund->review;
        $this->view->attends      = $attends;
        $this->view->leaveList    = $leaves;
        $this->view->refunds      = $refunds;
        $this->view->deptList     = $allDeptList;
        $this->view->users        = $this->loadModel('user')->getPairs();
        $this->view->type         = $type;
        $this->view->orderBy      = $orderBy;
        $this->view->categories   = $this->refund->getCategoryPairs();
        $this->view->currencySign = $this->loadModel('common', 'sys')->getCurrencySign();
        $this->display();
    }

    /**
     * browse todos.
     * 
     * @param  string $mode 
     * @param  string $orderBy 
     * @param  int    $recTotal 
     * @param  int    $recPerPage 
     * @param  int    $pageID 
     * @access public
     * @return void
     */
    public function todo($type = 'today', $orderBy = 'status,date', $recTotal = 0, $recPerPage = 20, $pageID = 1)
    {
        $this->loadModel('todo', 'oa');
        $this->app->loadClass('pager', $static = true);
        $pager = new pager($recTotal, $recPerPage, $pageID);

        if($type == 'future')
        {
            $todos = $this->todo->getList('self', $this->app->user->account, 'future', 'unclosed', $orderBy, $pager);
        }
        else if($type == 'today')
        {
            $todos = $this->todo->getList('self', $this->app->user->account, 'today', 'unclosed', $orderBy, $pager);
        }
        else if($type == 'all')
        {
            $todos = $this->todo->getList('self', $this->app->user->account, 'all', 'all', $orderBy, $pager);
        }
        else
        {
            $todos = $this->todo->getList($type, $this->app->user->account, 'all', 'unclosed', $orderBy, $pager);
        }

        $this->view->title   = $this->lang->todo->browse;
        $this->view->todos   = $todos;
        $this->view->users   = $this->loadModel('user')->getPairs();
        $this->view->type    = $type;
        $this->view->orderBy = $orderBy;
        $this->view->pager   = $pager;
        $this->display();
    }

    /**
     * Browse task list.
     * 
     * @param  string  $type 
     * @param  string  $orderBy 
     * @param  int     $recTotal 
     * @param  int     $recPerPage 
     * @param  int     $pageID 
     * @access public
     * @return void
     */
    public function task($type = 'assignedTo', $orderBy = 'id_desc', $recTotal = 0, $recPerPage = 20, $pageID = 1)
    {
        $this->session->set('taskList', "javascript:$.openEntry(\"dashboard\")");

        $this->app->loadClass('pager', $static = true);
        $pager = new pager($recTotal, $recPerPage, $pageID);

        $this->view->title   = $this->lang->my->task->$type;
        $this->view->type    = $type;
        $this->view->orderBy = $orderBy;
        $this->view->pager   = $pager;
        $this->view->tasks   = $this->loadModel('task')->getList(0, $type, $orderBy, $pager);
        $this->display();
    }

    /**
     *  Involved projects list.
     * 
     * @access public
     * @return void
     */
    public function project()
    {
        $this->loadModel('project', 'oa');
        $this->view->title    = $this->lang->my->project->common;
        $this->view->projects = $this->project->getList('involved');
        $this->view->users    = $this->loadModel('user')->getPairs('noclosed');
        $this->display();
    }
}
