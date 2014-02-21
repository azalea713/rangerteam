<?php
/**
 * The control file of dashboard module of ZenTaoMS.
 *
 * @copyright   Copyright 2013-2014 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     商业软件，非开源软件
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     dashboard
 * @version     $Id$
 * @link        http://www.zentao.net
 */
class dashboard extends control
{
    /**
     * Dsahboard Index page.
     * 
     * @access public
     * @return void
     */
    public function index()
    {
        $this->app->loadLang('index', 'sys');
        $personal = isset($this->config->personal->index) ? $this->config->personal->index : array();
        $blocks = empty($personal->block) ? array() : (array)$personal->block;

        foreach($blocks as $key => $block)
        {
            if($block->app != 'crm')
            {
                unset($blocks[$key]);
            }
            else
            {
                $block->value = json_decode($block->value);

                $block->value->params->account = $this->app->user->account;
                $block->value->params->uid     = $this->app->user->id;

                $query            = array();
                $query['mode']    = 'getblockdata';
                $query['blockid'] = $block->value->blockID;
                $query['param']   = base64_encode(json_encode($block->value->params));
                $query['hash']    = '';
                $query['lang']    = $this->app->getClientLang();
                $query['sso']     = '';

                $query = http_build_query($query);
                $sign  = $this->config->requestType == 'PATH_INFO' ? '?' : '&';

                $block->value->blockLink = $this->createLink('block', 'index') . $sign . $query;
            }
        }

        ksort($blocks);

        $this->view->blocks   = $blocks;
        $this->view->newIndex = $blocks ? count($blocks) + 1 : 1;;
        $this->display();
    }
}
