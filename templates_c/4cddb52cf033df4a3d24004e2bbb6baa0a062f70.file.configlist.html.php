<?php /* Smarty version Smarty-3.1.19, created on 2014-08-04 07:02:03
         compiled from "D:\DedeAMPZ\WebRoot\luo\myframe\view\Admin\configlist.html" */ ?>
<?php /*%%SmartyHeaderCode:86953ddf7a7d58fd3-62429482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cddb52cf033df4a3d24004e2bbb6baa0a062f70' => 
    array (
      0 => 'D:\\DedeAMPZ\\WebRoot\\luo\\myframe\\view\\Admin\\configlist.html',
      1 => 1407135719,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86953ddf7a7d58fd3-62429482',
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
  'unifunc' => 'content_53ddf7a81198c7_98283973',
  'variables' => 
  array (
    'config1' => 0,
    'plist' => 0,
    'v' => 0,
    'catlist' => 0,
    'cats' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ddf7a81198c7_98283973')) {function content_53ddf7a81198c7_98283973($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                            <li><a href="#tab-1">网站基本信息</a></li>
                            <li><a href="#tab-2">创建管理员</a></li>
                        </ul>
                        
                        <div id="tab-1">
                            <div class="mws-panel-body">
		                    	<form class="mws-form" method="post" action="<?php echo @constant('SERVER');?>
admin.php?c=cat&a=catAdd_do">
		                    		<div class="mws-form-inline">
		                    			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['config1']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['name'] = "ls";
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["ls"]['total']);
?>
		                    			<div class="mws-form-row">
		                    				<label><?php echo $_smarty_tpl->tpl_vars['config1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['info'];?>
</label>
		                    				<div class="mws-form-item medium">
		                    					<input type="text" class="mws-textinput" name="cat_name" <?php echo $_smarty_tpl->tpl_vars['config1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['value'];?>
/>
		                    					<p class="varname"><?php echo $_smarty_tpl->tpl_vars['config1']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['varname'];?>
</p>
		                    				</div>
		                    				
		                    			</div>
		                    			<?php endfor; endif; ?>
		                    		</div>
		                    	</form>
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
