<?php /* Smarty version Smarty-3.1.19, created on 2014-07-31 00:35:09
         compiled from "D:\DedeAMPZ\WebRoot\luo\myframe\view\Admin\catadd.html" */ ?>
<?php /*%%SmartyHeaderCode:1023053cf5d037caca5-82523359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df63b22a54f4ee2d6d3e0fdaf942cbd9f4a41d9f' => 
    array (
      0 => 'D:\\DedeAMPZ\\WebRoot\\luo\\myframe\\view\\Admin\\catadd.html',
      1 => 1406710603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1023053cf5d037caca5-82523359',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53cf5d03a0efd6_97094581',
  'variables' => 
  array (
    'catlist' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53cf5d03a0efd6_97094581')) {function content_53cf5d03a0efd6_97094581($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
css/reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
css/text.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
css/fonts/ptsans/stylesheet.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
css/fluid.css" media="screen" />

<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
css/mws.style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
css/icons/icons.css" media="screen" />

<!-- Demo and Plugin Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
css/demo.css" media="screen" />

<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
plugins/colorpicker/colorpicker.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
plugins/jimgareaselect/css/imgareaselect-default.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
plugins/fullcalendar/fullcalendar.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
plugins/fullcalendar/fullcalendar.print.css" media="print" />
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
plugins/tipsy/tipsy.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
plugins/sourcerer/Sourcerer-1.2.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
plugins/jgrowl/jquery.jgrowl.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
plugins/spinner/spinner.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
css/jui/jquery.ui.css" media="screen" />

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
css/mws.theme.css" media="screen" />

<!-- JavaScript Plugins -->

<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
js/jquery-1.7.1.min.js"></script>

<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/jimgareaselect/jquery.imgareaselect.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/jquery.dualListBox-1.3.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/jgrowl/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/jquery.filestyle.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/jquery.dataTables.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/flot/excanvas.min.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/flot/jquery.flot.pie.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/flot/jquery.flot.stack.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/colorpicker/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/tipsy/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/sourcerer/Sourcerer-1.2.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/jquery.placeholder.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/jquery.validate.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
js/jquery-ui.js"></script>

<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
js/mws.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
js/demo.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
js/themer.js"></script>

<title>MWS Admin - Form Layouts</title>

</head>

<body>

	<div id="mws-themer">
    	<div id="mws-themer-hide"></div>
        <div id="mws-themer-content">
        	<div class="mws-themer-section">
	        	<label for="mws-theme-presets">Presets</label> <select id="mws-theme-presets"></select>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
                <ul>
                    <li><span>Base Color</span> <div id="mws-base-cp" class="mws-cp-trigger"></div></li>
                    <li><span>Text Color</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                    <li><span>Text Glow Color</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
                </ul>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
            	<ul>
                    <li><span>Text Glow Opacity</span> <div id="mws-textglow-op"></div></li>
                </ul>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
	            <button class="mws-button red small" id="mws-themer-getcss">Get CSS</button>
            </div>
        </div>
        <div id="mws-themer-css-dialog">
        	<div class="mws-form">
            	<div class="mws-form-row" style="padding:0;">
		        	<div class="mws-form-item">
                    	<textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <div id="mws-wrapper">
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        <?php echo $_smarty_tpl->getSubTemplate ("./menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        <div id="mws-container" class="clearfix">
            <div class="container">
            
            	
                
            	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span class="mws-i-24 i-check">栏目添加</span>
                    </div>
                    <div class="mws-panel-body">
                    	<form class="mws-form" method="post" action="<?php echo @constant('SERVER');?>
admin.php?c=cat&a=catAdd_do">
                    		<div class="mws-form-inline">
                    			<div class="mws-form-row">
                    				<label>栏目名称</label>
                    				<div class="mws-form-item small">
                    					<input type="text" class="mws-textinput" name="cat_name"/>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label>栏目关键词</label>
                    				<div class="mws-form-item medium">
                    					<input type="text" class="mws-textinput" name="cat_keywords"/>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label>栏目描述</label>
                    				<div class="mws-form-item large">
                    					<input type="text" class="mws-textinput" name="cat_des"/>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label>上级栏目</label>
                    				<div class="mws-form-item small">
                    					<select name="cat_pid">
                    						<option value="0">-----</option>
                    					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    						<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['lev'];?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</option>
                    					<?php } ?>
                    					</select>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label>Checkboxes</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						<li><input type="checkbox" /> <label>Checkbox 1</label></li>
                    						<li><input type="checkbox" /> <label>Checkbox 2</label></li>
                    						<li><input type="checkbox" /> <label>Checkbox 3</label></li>
                    						<li><input type="checkbox" /> <label>Checkbox 4</label></li>
                    					</ul>
                    				</div>
                    			</div>
                    			<div class="mws-form-row">
                    				<label>Radio Buttons</label>
                    				<div class="mws-form-item clearfix">
                    					<ul class="mws-form-list inline">
                    						<li><input type="radio" /> <label>Radio 1</label></li>
                    						<li><input type="radio" /> <label>Radio 1</label></li>
                    						<li><input type="radio" /> <label>Radio 1</label></li>
                    						<li><input type="radio" /> <label>Radio 1</label></li>
                    					</ul>
                    				</div>
                    			</div>
                    		</div>
                    		<div class="mws-button-row">
                    			<input type="submit" value="Submit" class="mws-button green" />
                    			<input type="submit" value="Disabled" class="mws-button gray" disabled="disabled" />
                    		</div>
                    	</form>
                    </div>    	
                </div>
                
            	
            </div>
            
            <div id="mws-footer">
            	Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
            </div>
            
        </div>
    </div>


</body>
</html>
<?php }} ?>
