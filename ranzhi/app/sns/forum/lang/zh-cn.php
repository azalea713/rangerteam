<?php
/**
 * The forum module zh-cn file of Ranzhi.
 *
 * @copyright   Copyright 2013-2014 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     LGPL
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     forum
 * @version     $Id$
 * @link        http://www.ranzhi.org
 */
$lang->forum->board       = '版块';
$lang->forum->owners      = '版主';
$lang->forum->threadList  = '主题列表';
$lang->forum->threadCount = '主题数';
$lang->forum->postCount   = '帖子数';
$lang->forum->lastPost    = '最后发表';
$lang->forum->readonly    = '只读版块。';
$lang->forum->lblOwner    = " [ 版主：%s ]";

$lang->forum->post   = '发贴';
$lang->forum->admin  = '论坛维护';
$lang->forum->update = '更新数据';

$lang->forum->updateDesc    = '该更新操作会重新计算每个版块的发贴数据。';
$lang->forum->successUpdate = '更新数据成功';

/* Adjust the pager. */
$lang->pager->noRecord      = '';
$lang->pager->digest        = str_replace('记录', '主题', $lang->pager->digest);
$lang->pager->settedInForum = true;    // Set this switch thus in thread module can avoid overiding them.
