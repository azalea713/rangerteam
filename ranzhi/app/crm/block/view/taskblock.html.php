<?php
/**
 * The task block view file of block module of Ranzhi.
 *
 * @copyright   Copyright 2013-2014 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     LGPL
 * @author      Yidong Wang <yidong@cnezsoft.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.ranzhi.org
 */
?>
<table class='table table-data table-hover' id='crmBlockTask'>
  <tr>
    <th class='w-50px text-center'><?php echo $lang->task->id?></th>
    <th class='w-20px text-center'><?php echo $lang->task->lblPri?></th>
    <th><?php echo $lang->task->name?></th>
    <th><?php echo $lang->task->deadline?></th>
    <th><?php echo $lang->task->status?></th>
  </tr>
  <?php foreach($tasks as $id => $task):?>
  <?php $appid = ($this->get->app == 'sys' and isset($_GET['entry'])) ? "class='app-btn' data-id={$this->get->entry}" : ''?>
  <tr data-url='<?php echo $this->createLink('task', 'view', "taskID=$id"); ?>' <?php echo $appid?>>
    <td class='text-center'><?php echo $id;?></td>
    <td class='text-center'><span class='active pri pri-<?php echo $task->pri;?>'><?php echo $lang->task->priList[$task->pri];?></span></td>
    <td><strong><?php echo $task->name;?></strong></td>
    <td><?php echo $task->deadline;?></td>
    <td><?php echo $lang->task->statusList[$task->status];?></td>
  </tr>
  <?php endforeach;?>
</table>
<script>$('#crmBlockTask').dataTable();</script>
