<?php /* Smarty version Smarty-3.1.19, created on 2014-07-23 08:10:33
         compiled from "D:\DedeAMPZ\WebRoot\luo\myframe\view\Admin\cc.html" */ ?>
<?php /*%%SmartyHeaderCode:2784953cf6df998bdd9-97437505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcc35ecdba134280cc37e0033486bbd2f408ae94' => 
    array (
      0 => 'D:\\DedeAMPZ\\WebRoot\\luo\\myframe\\view\\Admin\\cc.html',
      1 => 1406086910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2784953cf6df998bdd9-97437505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'new' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53cf6df9a1f9a3_71258622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cf6df9a1f9a3_71258622')) {function content_53cf6df9a1f9a3_71258622($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> New Document </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>

 <body>
  你好
  <?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
?>
 		<?php echo $_smarty_tpl->tpl_vars['new']->value['cat_name'];?>
<br>
	<?php } ?>
 </body>
</html><?php }} ?>
