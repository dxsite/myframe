<?php /* Smarty version Smarty-3.1.19, created on 2014-08-03 06:54:20
         compiled from "D:\DedeAMPZ\WebRoot\luo\myframe\view\Admin\adminlist.html" */ ?>
<?php /*%%SmartyHeaderCode:633253dd8645eb6282-34833988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e69a0417ed0ff221db5a3099944c34462e6cf8f6' => 
    array (
      0 => 'D:\\DedeAMPZ\\WebRoot\\luo\\myframe\\view\\Admin\\adminlist.html',
      1 => 1407048637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '633253dd8645eb6282-34833988',
  'function' => 
  array (
    'power' => 
    array (
      'parameter' => 
      array (
        'tmp' => '1',
      ),
      'compiled' => '',
    ),
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53dd8646287f83_12260603',
  'variables' => 
  array (
    'tmp' => 0,
    'alist' => 0,
    'item' => 0,
    'plist' => 0,
    'v' => 0,
    'catlist' => 0,
    'cats' => 0,
  ),
  'has_nocache_code' => 0,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53dd8646287f83_12260603')) {function content_53dd8646287f83_12260603($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
js/demo.dashboard.js"></script>

<title>MWS Admin - Dashboard</title>

</head>

<body>

	<!-- Themer -->  
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
    <!-- Themer End -->
    

	<?php echo $_smarty_tpl->getSubTemplate ("./header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <!-- Main Wrapper -->
    <div id="mws-wrapper">
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <?php echo $_smarty_tpl->getSubTemplate ("./menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        
        <!-- Container Wrapper -->
        <div id="mws-container" class="clearfix">
			
        	<!-- Main Container -->
			
            <div class="container">
				<div class="mws-panel grid_8">
                    <div class="mws-tabs">

                        <ul>
                            <li><a href="#tab-1">管理员列表</a></li>
                            <li><a href="#tab-2">创建管理员</a></li>
                        </ul>
                        
                        <div id="tab-1">
                            <div class="mws-panel-body">
								<table class="mws-table">
									<thead>
										<tr>
											<th>ID</th>
											<th>用户名</th>
											<th>名称</th>
											<th>权限</th>
											<th>CSS grade</th>
										</tr>
									</thead>
									<?php if (!function_exists('smarty_template_function_power')) {
    function smarty_template_function_power($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['power']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
										<?php if ($_smarty_tpl->tpl_vars['tmp']->value=='1') {?>
											超级管理员
										<?php  } else { if (!isset($_smarty_tpl->tpl_vars['tmp'])) $_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable(null);if ($_smarty_tpl->tpl_vars['tmp']->value = '2') {?>
											信息发布员
										<?php }}?>
									<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

									<tbody>
									<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['alist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
										<tr class="gradeX">
											<td><?php echo $_smarty_tpl->tpl_vars['item']->value['user_id'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
</td>
											<td><?php echo $_smarty_tpl->tpl_vars['item']->value['nickname'];?>
</td>
											<td class="center"><?php smarty_template_function_power($_smarty_tpl,array('tmp'=>$_smarty_tpl->tpl_vars['item']->value['power']));?>
</td>
											<td class="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="mws-ic-16 ic-edit" href=""><img src="<?php echo @constant('ADMIN_TPL');?>
css/icons/16/edit.png"/></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="mws-ic-16 ic-cross" href=""><img src="<?php echo @constant('ADMIN_TPL');?>
css/icons/16/cross.png"/></a></td>
										</tr>
									<?php } ?> 
									</tbody>
								</table>
							</div>
                        </div>
                        
                        <div id="tab-2">
                        <div class="mws-panel-body">
	                    	<form class="mws-form" method="post" action="<?php echo @constant('SERVER');?>
admin.php?c=admin&a=adminAdd_do">
	                    		<div class="mws-form-inline">
	                    			<div class="mws-form-row">
	                    				<label>管理员用户名</label>
	                    				<div class="mws-form-item medium">
	                    					<input type="text" class="mws-textinput" name="username"/>
	                    				</div>
	                    			</div>
	                    			<div class="mws-form-row">
	                    				<label>管理员昵称</label>
	                    				<div class="mws-form-item medium">
	                    					<input type="text" class="mws-textinput" name="nickname"/>
	                    				</div>
	                    			</div>
	                    			<div class="mws-form-row">
	                    				<label>密码</label>
	                    				<div class="mws-form-item medium">
	                    					<input type="text" class="mws-textinput" name="passwd"/>
	                    				</div>
	                    			</div>
	                    			<div class="mws-form-row">
	                    				<label>重复密码</label>
	                    				<div class="mws-form-item medium">
	                    					<input type="text" class="mws-textinput" name="passwds"/>
	                    				</div>
	                    			</div>
	                    			<div class="mws-form-row">
	                    				<label>管理员权限</label>
	                    				<div class="mws-form-item medium">
	                    					<select name="power">
	                    						<option value="0">-------------</option>
	                    					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	                    						<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['power_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['powername'];?>
</option>
	                    					<?php } ?>
	                    					</select>
	                    				</div>
	                    			</div>
	                    			
	                    			<div class="mws-form-row">
	                    				<label>栏目权限</label>
	                    				<div class="mws-form-item large">
	                                    	<div class="mws-dualbox clearfix">
	                                        	<div class="mws-dualbox-col1">
	                                            	<div class="mws-dualbox-filter clearfix">
                                                    	<label for="box1Filter">Filter</label>
                                                    	<input type="text" id="box1Filter" class="mws-textinput" />
                                                    	<button type="button" id="box1Clear">X</button>
                                                	</div>
	
	                                                <select id="box1View" multiple="multiple" size="15">
	                                                <?php  $_smarty_tpl->tpl_vars['cats'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cats']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cats']->key => $_smarty_tpl->tpl_vars['cats']->value) {
$_smarty_tpl->tpl_vars['cats']->_loop = true;
?>
	                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['cats']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cats']->value['lev'];?>
<?php echo $_smarty_tpl->tpl_vars['cats']->value['cat_name'];?>
</option>
	                                                <?php } ?>
	                                                </select>
	                                                <span id="box1Counter" class="countLabel"></span>
	                                                <select id="box1Storage"></select>
	                                            </div>
	                                            <div class="mws-dualbox-col2">
	                                                <button id="to2" type="button">&gt;</button>
	                                                <button id="allTo2" type="button">&gt;&gt;</button>
	                                                <div class="clear"></div>
	                                                <button id="allTo1" type="button">&lt;&lt;</button>
	                                                <button id="to1" type="button">&lt;</button>
	                                            </div>
	                                            <div class="mws-dualbox-col3">
		                                            <div class="mws-dualbox-filter clearfix">
    	                                            	<label for="box2Filter">Filter</label>
        	                                        	<input type="text" id="box2Filter" class="mws-textinput" />
            	                                    	<button type="button" id="box2Clear">X</button>
                                                	</div>
	                                                <select id="box2View" multiple="multiple" size="15"  name="powerls[]"></select>
	                                                <span id="box2Counter" class="countLabel"></span>
	                                                <select id="box2Storage"></select>
	                                            </div>
	                                        </div>
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
                </div>
            	
                
            </div>
            <!-- End Main Container -->
            
            <!-- Footer -->
			
            <div id="mws-footer">
            	Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>
            </div>
            <!-- End Footer -->
            
        </div>
        <!-- End Container Wrapper -->
        
    </div>
    <!-- End Main Wrapper -->


</body>
</html>
<?php }} ?>
