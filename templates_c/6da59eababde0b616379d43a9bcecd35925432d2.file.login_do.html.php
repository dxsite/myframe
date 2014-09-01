<?php /* Smarty version Smarty-3.1.19, created on 2014-07-31 01:10:51
         compiled from "D:\DedeAMPZ\WebRoot\luo\myframe\view\Admin\login_do.html" */ ?>
<?php /*%%SmartyHeaderCode:3267353d86b89e51f06-07839635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6da59eababde0b616379d43a9bcecd35925432d2' => 
    array (
      0 => 'D:\\DedeAMPZ\\WebRoot\\luo\\myframe\\view\\Admin\\login_do.html',
      1 => 1406769043,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3267353d86b89e51f06-07839635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53d86b8a016b61_16042273',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d86b8a016b61_16042273')) {function content_53d86b8a016b61_16042273($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<p>登陆成功</p>
<a href="admin.php">点击进入</a>
<?php } else { ?>
<p>登陆失败</p>
<a href="admin.php">点击返回</a>
<?php }?>
</div>
</body>
</html><?php }} ?>
