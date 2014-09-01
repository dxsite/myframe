<?php /* Smarty version Smarty-3.1.19, created on 2014-07-30 23:50:15
         compiled from "D:\DedeAMPZ\WebRoot\luo\myframe\view\Admin\loginout.html" */ ?>
<?php /*%%SmartyHeaderCode:809853d8a416b3a6c9-71970266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73c733901ae139b9232dd29072b777e49d286871' => 
    array (
      0 => 'D:\\DedeAMPZ\\WebRoot\\luo\\myframe\\view\\Admin\\loginout.html',
      1 => 1406707461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '809853d8a416b3a6c9-71970266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53d8a416bc2d08_44345893',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d8a416bc2d08_44345893')) {function content_53d8a416bc2d08_44345893($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv = "Content-Type" content="text/html;charset=utf-8"/>
<title>登陆信息</title>
<style>
.con{
	width:300px;
	height:150px;
	margin:200px auto 0;
	border:1px solid #000;
}
.con p{
	width:300px;
	height:100px;
	text-align:center;
	margin:0;
	line-height:100px;
}
.con a{width:100%;margin:0 auto;text-align:center;display:block;}
</style>

</head>
<body>
<div class="con">
<?php ob_start();?><?php echo $_SESSION['user_id'];?>
<?php $_tmp1=ob_get_clean();?><?php if (!empty($_tmp1)) {?>
<p>注销失败</p>
<?php } else { ?>
<p>已注销</p>
<a href="admin.php">点击进入</a>
<?php }?>
</div>
</body>
</html><?php }} ?>
