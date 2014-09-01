<?php /* Smarty version Smarty-3.1.19, created on 2014-07-23 07:23:00
         compiled from "D:\DedeAMPZ\WebRoot\luo\myframe\view\Home\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1841753cf62d4923499-31763495%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74d9b20e8fe1a013b1f7463975a77a620962a827' => 
    array (
      0 => 'D:\\DedeAMPZ\\WebRoot\\luo\\myframe\\view\\Home\\index.html',
      1 => 1405930644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1841753cf62d4923499-31763495',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lists' => 0,
    'new_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53cf62d49b2a76_14030967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cf62d49b2a76_14030967')) {function content_53cf62d49b2a76_14030967($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  <title> New Document </title>
  <meta name="Generator" content="EditPlus">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
 </head>

 <body>
  ÄãºÃ
  <?php  $_smarty_tpl->tpl_vars['new_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['new_item']->key => $_smarty_tpl->tpl_vars['new_item']->value) {
$_smarty_tpl->tpl_vars['new_item']->_loop = true;
?>
 		<?php echo $_smarty_tpl->tpl_vars['new_item']->value['d'];?>
<br>
	<?php } ?>
 </body>
</html>
<?php }} ?>
