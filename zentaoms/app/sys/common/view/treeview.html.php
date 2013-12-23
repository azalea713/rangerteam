<?php
/**
 * The treeview view of common module of ZenTaoMS.
 *
 * @copyright   Copyright 2013-2014 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     商业软件，非开源软件
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     common 
 * @version     $Id$
 * @link        http://www.zentao.net
 */
css::import($jsRoot . 'jquery/treeview/min.css');
js::import($jsRoot . 'jquery/treeview/min.js');
?>
<script language='javascript'>$(function() {$(".tree").treeview({collapsed: false, unique: false}) })</script>
