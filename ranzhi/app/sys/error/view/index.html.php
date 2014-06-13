<?php
/**
 * The html template file of deny method of user module of RanZhi.
 *
 * @copyright   Copyright 2013-2014 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     LGPL
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     RanZhi
 * @version     $Id: deny.html.php 8260 2014-04-14 03:17:19Z guanxiying $
 */
include '../../common/view/header.lite.html.php';
js::set('locate', $locate);
?>
<div class='page-container w-200px'>
  <div class='alert alert-danger'>
    <p><?php echo $message;?></p>
  </div>
</div>
<?php js::execute($pageJS);?>
</body>
</html>