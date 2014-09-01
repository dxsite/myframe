<?php /* Smarty version Smarty-3.1.19, created on 2014-08-01 03:38:28
         compiled from "D:\DedeAMPZ\WebRoot\luo\myframe\view\Admin\filemanager.html" */ ?>
<?php /*%%SmartyHeaderCode:1198053d99a78dd20f8-33159200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd0b13f06ee8f082888b854aee66389d6f17bf81' => 
    array (
      0 => 'D:\\DedeAMPZ\\WebRoot\\luo\\myframe\\view\\Admin\\filemanager.html',
      1 => 1406863864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1198053d99a78dd20f8-33159200',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53d99a7906f8b9_79868937',
  'variables' => 
  array (
    'mlist' => 0,
    'flist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d99a7906f8b9_79868937')) {function content_53d99a7906f8b9_79868937($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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


<link rel="stylesheet" type="text/css" href="<?php echo @constant('ADMIN_TPL');?>
files/css/table.css" media="screen" />

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
plugins/jquery.dataTables1.js"></script>
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
plugins/elfinder/js/elfinder.min.js"></script>

<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/plupload/plupload.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/plupload/plupload.flash.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/plupload/plupload.html4.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/plupload/plupload.html5.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.js"></script>

<link rel="stylesheet" href="<?php echo @constant('ADMIN_TPL');?>
plugins/plupload/jquery.plupload.queue.css" />
<link rel="stylesheet" href="<?php echo @constant('ADMIN_TPL');?>
plugins/elfinder/css/elfinder.css" />

<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
js/mws.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
js/demo.js"></script>
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
js/themer.js"></script>

<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
js/demo.files.js"></script>
<!-- 目录操作 -->
<script type="text/javascript" src="<?php echo @constant('ADMIN_TPL');?>
files/js/folder.js"></script>

<title>MWS Admin - Files</title>

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
                	<div class="mws-panel-header">
                    	<span class="mws-i-24 i-file-cabinet">File Manager</span>
                    </div>
                    <div id="files">
                    	<div class="file_dir">
                    		<div class="menu">
								<ul>
								<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['mlist']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['name'] = 'ls';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total']);
?>
									<li><a class="folders" add="<?php echo @constant('ROOT');?>
" href="javascript:void(0)" tmp='0'><?php echo $_smarty_tpl->tpl_vars['mlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']];?>
</a></li>
									
								<?php endfor; endif; ?>
								</ul>
								<input type="hidden" id="parentpath" value="<?php echo @constant('ROOT');?>
"/>
							</div>
                    	</div>
                    	
                    	
                    	
                    	<div class="file_con">
                    		<ul class="file_con_content">
                    			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['flist']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['name'] = 'ls';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['total']);
?>
                    			
                    			<li><a><img src="<?php echo @constant('ADMIN_TPL');?>
files/images/<?php echo $_smarty_tpl->tpl_vars['flist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['ext'];?>
.png" width="100"/><span><?php echo $_smarty_tpl->tpl_vars['flist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['name'];?>
</span></a></li>
                    			<?php endfor; endif; ?>
                    		</ul>
                    	</div>
                    </div>
				</div>
                
            	<div class="mws-panel grid_8">
                	<div class="mws-panel-header">
                    	<span class="mws-i-24 i-upload">File Uploader</span>
                    </div>
                    <div class="mws-panel-body">
                        <div id="uploader">
                            <p>You browser doesn't have Flash, Silverlight, Gears, BrowserPlus or HTML5 support.</p>
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
