<?php
/**
 * The user module zh-tw file of RanZhi.
 *
 * @copyright   Copyright 2009-2016 青島易軟天創網絡科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     user
 * @version     $Id: zh-tw.php 4029 2016-08-26 06:50:41Z liugang $
 * @link        http://www.ranzhico.com
 */
$lang->user->common    = '成員';

$lang->user->id        = '編號';
$lang->user->account   = '用戶名';
$lang->user->super     = '管理員';
$lang->user->password  = '密碼';
$lang->user->password2 = '請重複密碼';
$lang->user->realname  = '真實姓名';
$lang->user->nickname  = '暱稱';
$lang->user->dept      = '所屬部門';
$lang->user->role      = '角色';    
$lang->user->avatar    = '頭像';
$lang->user->birthyear = '出生年';
$lang->user->birthday  = '出生月日';
$lang->user->gender    = '性別';
$lang->user->email     = '郵箱';
$lang->user->msn       = 'MSN';
$lang->user->qq        = 'QQ';
$lang->user->yahoo     = '雅虎通';
$lang->user->gtalk     = 'Gtalk';
$lang->user->wangwang  = '旺旺';
$lang->user->mobile    = '手機';
$lang->user->phone     = '電話';
$lang->user->dept      = '部門';
$lang->user->address   = '通訊地址';
$lang->user->zipcode   = '郵編';
$lang->user->join      = '加入日期';
$lang->user->visits    = '訪問次數';
$lang->user->ip        = '最後IP';
$lang->user->last      = '最後登錄';
$lang->user->allowTime = '開放時間';
$lang->user->status    = '狀態';
$lang->user->alert     = '您的帳號已被禁用';
$lang->user->keepLogin = '保持登錄';
$lang->user->ignore    = '忽略';

$lang->user->admin           = '瀏覽成員';
$lang->user->list            = '成員列表';
$lang->user->colleague       = '同事列表';
$lang->user->view            = "成員詳情";
$lang->user->create          = "添加成員";
$lang->user->edit            = "編輯成員";
$lang->user->changePassword  = "更改密碼";
$lang->user->recoverPassword = "忘記密碼";
$lang->user->newPassword     = "新密碼";
$lang->user->update          = "編輯成員";
$lang->user->delete          = "刪除成員";
$lang->user->browse          = "瀏覽成員";
$lang->user->deny            = "訪問受限";
$lang->user->confirmDelete   = "您確認刪除該成員嗎？";
$lang->user->confirmActivate = "您確認激活該成員嗎？";
$lang->user->relogin         = "重新登錄";
$lang->user->asGuest         = "遊客訪問";
$lang->user->goback          = "返回前一頁";
$lang->user->allUsers        = '全部成員';
$lang->user->submit          = "提交";
$lang->user->forbid          = '禁用';
$lang->user->active          = '激活';
$lang->user->setReferer      = '設置referer';
$lang->user->vcard           = '獲取二維碼名片';
$lang->user->uploadAvatar    = '上傳頭像';
$lang->user->cropAvatar      = '裁剪頭像';
$lang->user->cropAvatarTip   = '拖拽選框來選擇頭像裁剪範圍';
$lang->user->adminUser       = '組織';

$lang->user->profile     = '個人信息';
$lang->user->editProfile = '編輯信息';
$lang->user->thread      = '我的主題';
$lang->user->reply       = '我的回貼';
$lang->user->message     = '我的消息';

$lang->user->inputUserName       = '請輸入成員名';
$lang->user->inputColleague      = '請輸入同事姓名';
$lang->user->inputAccountOrEmail = '請輸入成員名或Email';
$lang->user->inputPassword       = '請輸入密碼';
$lang->user->searchUser          = '搜索';

$lang->user->errorDeny     = "抱歉，您無權訪問『<b>%s</b>』模組的『<b>%s</b>』功能。請聯繫管理員獲取權限。點擊後退返回上頁。<br/> 5秒鐘後將自動返迴首頁...";
$lang->user->loginFailed   = "登錄失敗，請檢查您的成員名或密碼是否填寫正確。";
$lang->user->locked        = "成員已經被鎖定，請%s後再重新嘗試登錄";
$lang->user->lockedForEver = "成員已經被永久禁用。";
$lang->user->forbidSuccess = '禁用成功';
$lang->user->actionFail    = '操作失敗';
$lang->user->uploadSuccess = '上傳成功';

$lang->user->forbidUser = '禁用管理';
$lang->user->operate    = '操作';

$lang->user->genderList = $lang->genderList;

$lang->user->basicInfo   = '基本信息';
$lang->user->contactInfo = '聯繫信息';

$lang->user->statusList = new stdclass();
$lang->user->statusList->locked    = "<label class='label label-danger'>鎖定</label>";
$lang->user->statusList->forbidden = "<label class='label label-danger'>禁用</label>";
$lang->user->statusList->normal    = "<label class='label label-success'>正常</label>";

$lang->user->notice = new stdclass();
$lang->user->notice->password = '字母和數字組合，最少六位';

$lang->user->login  = new stdclass();
$lang->user->login->common  = "登錄";
$lang->user->login->welcome = '已有帳號';
$lang->user->login->why     = '歡迎登陸，享用會員專屬服務！';

$lang->user->control = new stdclass();
$lang->user->control->common      = '成員中心';
$lang->user->control->welcome     = '歡迎您，<strong>%s</strong>';
$lang->user->control->lblPassword = "留空，則保持不變。";

$lang->user->control->menus[10] = '<i class="icon-large icon-user"></i> 個人信息 <i class="icon-chevron-right"></i>|user|profile';
$lang->user->control->menus[20] = '<i class="icon-large icon-edit"></i> 編輯信息 <i class="icon-chevron-right"></i>|user|edit';
//$lang->user->control->menus[28] = '<i class="icon-large icon-comments-alt"></i> 我的消息 <i class="icon-chevron-right"></i>|user|message';
$lang->user->control->menus[30] = '<i class="icon-large icon-share"></i> 我的主題 <i class="icon-chevron-right"></i>|user|thread';
$lang->user->control->menus[40] = '<i class="icon-large icon-mail-reply-all"></i> 我的回帖 <i class="icon-chevron-right"></i>|user|reply';

$lang->user->colleagueMenu = '同事';

$lang->dept = new stdclass();  
$lang->dept->common     = '部門結構';
$lang->dept->name       = '部門名稱';
$lang->dept->alias      = '部門別名';
$lang->dept->edit       = '維護部門';
$lang->dept->parent     = '上級部門';
$lang->dept->children   = '子部門';
$lang->dept->desc       = '描述';
$lang->dept->keywords   = '關鍵詞';
$lang->dept->moderators = '部門經理';

$lang->user->roleList['']           = ''; 
$lang->user->roleList['dev']        = '研發';
$lang->user->roleList['pm']         = '項目經理';
$lang->user->roleList['market']     = '市場';
$lang->user->roleList['sale']       = '銷售';
$lang->user->roleList['hr']         = '人事';
$lang->user->roleList['office']     = '行政';
$lang->user->roleList['service']    = '客服';
$lang->user->roleList['support']    = '技術支持';
$lang->user->roleList['marketmgr']  = '市場主管';
$lang->user->roleList['salemgr']    = '銷售經理';
$lang->user->roleList['hrmgr']      = '人事主管';
$lang->user->roleList['adminmgr']   = '行政主管';
$lang->user->roleList['servicemgr'] = '客服主管';
$lang->user->roleList['supportmgr'] = '技術支持主管';
$lang->user->roleList['top']        = '高層管理';
$lang->user->roleList['others']     = '其他';

$lang->user->mailContent = <<<EOT
<html>
<head>
<style type='text/css'>
body{margin:0;padding:0;}
div{padding-left:30px;}
</style>
</head>
<body>
<div style='padding-top:20px;height:60px;background:#fafafa;border-bottom:1px solid #ddd;font-size:18px;font-weight:bold'> 密碼修改 </div>
<div style='margin-top:20px;'>
<p>尊敬的成員 %s <br />
請點擊下面的連結，進行密碼修改: <br >
<a href='%s' target='_blank'>%s</a>
</p>
<p>重置碼：%s</p>
</div>
<div style='height:20px;border-bottom:1px solid #ddd;'></div>
<div style='margin:20px 0 0 0 ;'>
 系統發信，請勿回覆
</div>
</body>
</html>
EOT;
