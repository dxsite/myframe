<?php /* Smarty version Smarty-3.1.19, created on 2014-08-03 08:49:44
         compiled from "D:\DedeAMPZ\WebRoot\luo\myframe\view\Admin\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:3175953d0cd0d274e04-88704280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5dce7785d948896523c9704877bc745be5ddf1b2' => 
    array (
      0 => 'D:\\DedeAMPZ\\WebRoot\\luo\\myframe\\view\\Admin\\menu.html',
      1 => 1407055247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3175953d0cd0d274e04-88704280',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53d0cd0d2d87e7_72833737',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d0cd0d2d87e7_72833737')) {function content_53d0cd0d2d87e7_72833737($_smarty_tpl) {?><!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        	
            <!-- Search Box -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form >
                	<input type="text" class="mws-search-input" />
                    <input type="submit" class="mws-search-submit" />
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
            	<ul>
                	<li class="active"><a href="<?php echo @constant('SERVER');?>
admin.php" class="mws-i-24 i-home">主页</a></li>
                	<li>
                		<a href="<?php echo @constant('SERVER');?>
admin.php?c=cat&a=catList" class="mws-i-24 i-text-styling">栏目管理</a>
                		<ul>
                        	<li><a href="<?php echo @constant('SERVER');?>
admin.php?c=cat&a=catList">栏目列表</a></li>
                        	<li><a href="<?php echo @constant('SERVER');?>
admin.php?c=cat&a=catAdd">栏目添加</a></li>
                        </ul>
                	</li>
                	<li>
                    	<a href="<?php echo @constant('SERVER');?>
admin.php?c=art&a=artList" class="mws-i-24 i-list">文章管理</a>
                        <ul>
                        	<li><a href="<?php echo @constant('SERVER');?>
admin.php?c=art&a=artList">文章列表</a></li>
                        	<li><a href="<?php echo @constant('SERVER');?>
admin.php?c=art&a=artAdd">文章添加</a></li>
                        	<li><a href="<?php echo @constant('SERVER');?>
admin.php?c=art&a=search">文章搜索</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo @constant('SERVER');?>
admin.php?c=file&a=upImg" class="mws-i-24 i-blocks-images">文件上传</a></li>
                	<li><a href="<?php echo @constant('SERVER');?>
admin.php?c=file&a=fileManager" class="mws-i-24 i-file-cabinet">文件管理器</a></li>
                	<li><a href="<?php echo @constant('SERVER');?>
admin.php?c=sysconfig&a=configList" class="mws-i-24 i-cog">系统参数</a></li>
                	<li><a href="error.html" class="mws-i-24 i-alert-2">安全设置</a></li>
                	<li>
                    	<a href="<?php echo @constant('SERVER');?>
admin.php?c=admin&a=adminList" class="mws-i-24 i-pacman">
                        	用户管理
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Navigation -->
            
        </div><?php }} ?>
