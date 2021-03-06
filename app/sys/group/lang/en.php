<?php
/**
 * The group module English file of RanZhi.
 *
 * @copyright   Copyright 2009-2016 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Xiying Guan <guanxiying@xirangit.com>
 * @package     group
 * @version     $Id: en.php 4719 2013-05-03 02:20:28Z chencongzhi520@gmail.com $
 * @link        http://www.ranzhico.com
 */
$lang->group->common             = 'Group';
$lang->group->browse             = 'Browse';
$lang->group->create             = 'Create';
$lang->group->edit               = 'Edit';
$lang->group->copy               = 'Copy';
$lang->group->delete             = 'Delete';
$lang->group->manageAppPriv      = 'Application';
$lang->group->managePriv         = 'Privilege';
$lang->group->managePrivByGroup  = 'Privilege';
$lang->group->managePrivByModule = 'Manage privilege by module';
$lang->group->byModuleTips       = '<span class="tips"> (Press shift or control to multiple select)</span>';
$lang->group->manageMember       = 'Members';
$lang->group->linkMember         = 'Add members';
$lang->group->unlinkMember       = 'Remove member';
$lang->group->confirmDelete      = 'Are you sure to delete this group?';
$lang->group->successSaved       = 'Success saved.';
$lang->group->errorNotSaved      = 'Not saved, please make sure you have selected some actions and groups.';

$lang->group->id       = 'Id';
$lang->group->name     = 'Name';
$lang->group->desc     = 'Desc';
$lang->group->users    = 'Users';
$lang->group->module   = 'Module';
$lang->group->method   = 'Method';
$lang->group->priv     = 'Priviledge';
$lang->group->option   = 'Option';
$lang->group->inside   = 'Group users';
$lang->group->outside  = 'Other users';
$lang->group->other    = 'Others';
$lang->group->all      = 'All';
$lang->group->extent   = 'extent';
$lang->group->havePriv = 'Have Privilege';
$lang->group->noPriv   = 'No Privilege';

$lang->group->manageAll = 'View all customers and orders';

$lang->group->copyOptions['copyPriv'] = 'Copy priviledge';
$lang->group->copyOptions['copyUser'] = 'Copy user';

$lang->group->placeholder = new stdclass();
$lang->group->placeholder->tree = 'Including area,industry,income and expense,forum board,blog category, department';
$lang->group->placeholder->lang = 'Including product status,product line,customer type,customer size,customer level,customer status,currency and role';

include (dirname(__FILE__) . '/resource.php');
