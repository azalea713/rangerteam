<?php
/**
 * The article category zh-cn file of RanZhi.
 *
 * @copyright   Copyright 2009-2016 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     article
 * @version     $Id: en.php 4029 2016-08-26 06:50:41Z liugang $
 * @link        http://www.ranzhico.com
 */
$lang->article->common      = 'Article';
$lang->article->createDraft = 'Create draft';

$lang->article->id          = 'Id';
$lang->article->category    = 'Categories';
$lang->article->categories  = 'Categories';
$lang->article->title       = 'Title';
$lang->article->alias       = 'English alias';
$lang->article->content     = 'Content';
$lang->article->original    = 'Original';
$lang->article->copySite    = 'Site';
$lang->article->copyURL     = 'URL';
$lang->article->keywords    = 'Keywords';
$lang->article->summary     = 'Summary';
$lang->article->author      = 'Author';
$lang->article->editor      = 'Editor';
$lang->article->createdDate = 'Added';
$lang->article->editedDate  = 'Edited';
$lang->article->status      = 'Status';
$lang->article->type        = 'Type';
$lang->article->views       = 'Views';
$lang->article->stick       = 'Sticky';
$lang->article->order       = 'Order';
$lang->article->private     = 'Private';
$lang->article->users       = 'Users';
$lang->article->groups      = 'Groups';
$lang->article->readers     = 'Readers';

$lang->article->list   = 'List';
$lang->article->admin  = 'Admin';
$lang->article->create = 'Create';
$lang->article->edit   = 'Edit';
$lang->article->files  = 'Files';

if(!isset($lang->blog)) $lang->blog = new stdclass();
$lang->blog->admin  = 'Admin';
$lang->blog->list   = 'List';
$lang->blog->create = 'Create';
$lang->blog->edit   = 'Edit';

if(!isset($lang->announce)) $lang->announce = new stdclass();
$lang->announce->admin  = 'Announce';
$lang->announce->list   = 'List';
$lang->announce->create = 'Create';
$lang->announce->edit   = 'Edit';

$lang->page = new stdclass();
$lang->page->admin  = 'Admin';
$lang->page->list   = 'List';
$lang->page->create = 'Create';
$lang->page->edit   = 'Edit';

$lang->article->originalList[1] = 'Original';
$lang->article->originalList[0] = 'Copied';

$lang->article->statusList['draft']  = 'Draft';
$lang->article->statusList['normal'] = 'Normal';

$lang->article->confirmDelete = 'Are you sure to delete this article?';

$lang->article->lblAddedDate = '<strong>Added:</strong> %s &nbsp;&nbsp;';
$lang->article->lblAuthor    = "<strong>Author:</strong> %s &nbsp;&nbsp;";
$lang->article->lblSource    = '<strong>Source:</strong>';
$lang->article->lblViews     = ' <strong>Views:</strong>%s';
$lang->article->lblEditor    = '<i>Edited by %s at %s</i>';
$lang->article->lblReaders   = '%s users had read.';

$lang->article->prev      = 'Previous';
$lang->article->next      = 'Next';
$lang->article->none      = 'None';
$lang->article->directory = 'Back';
$lang->article->back2Top  = 'Back to top';

$lang->article->note = new stdclass();
$lang->article->note->createdDate = 'Can be delayed until the selected time publish.';
