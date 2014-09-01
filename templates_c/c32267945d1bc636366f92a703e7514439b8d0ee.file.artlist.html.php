<?php /* Smarty version Smarty-3.1.19, created on 2014-08-04 08:14:15
         compiled from "D:\DedeAMPZ\WebRoot\luo\myframe\view\Admin\artlist.html" */ ?>
<?php /*%%SmartyHeaderCode:963553d0ad5fe6b193-86834278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c32267945d1bc636366f92a703e7514439b8d0ee' => 
    array (
      0 => 'D:\\DedeAMPZ\\WebRoot\\luo\\myframe\\view\\Admin\\artlist.html',
      1 => 1407139430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '963553d0ad5fe6b193-86834278',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53d0ad602a6da4_72784036',
  'variables' => 
  array (
    'artlist' => 0,
    'total' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53d0ad602a6da4_72784036')) {function content_53d0ad602a6da4_72784036($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
css/core/table.css" media="screen" />

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

<title>MWS Admin - Table</title>

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
                    	<span class="mws-i-24 i-table-1">文章</span>
                    </div>
                    <div class="mws-panel-body">
                    	<div class="mws-panel-toolbar top clearfix">
                        	<ul>
                            	<li><a href="<?php echo @constant('SERVER');?>
admin.php?c=art&a=artAdd" class="mws-ic-16 ic-accept">添加文章</a></li>
                            	<li><a href="#" class="mws-ic-16 ic-arrow-refresh">刷新</a></li>
                            </ul>
                        </div>
                        <div class="dataTables_wrapper">
                        <div class="dataTables_length">
							<label>
							Show
							<select size="1">
							<option value="10" selected="selected">10</option>
							<option value="25">25</option>
							<option value="50">50</option>
							<option value="100">100</option>
							</select>
							entries
							</label>
						</div>
						<div class="dataTables_filter">
							<label>
							Search:
							<input type="text">
							</label>
						</div>
                        <table class="mws-datatable-fn mws-table">
                            <thead>
                                <tr>
                                    <th width="10%">文章ID</th>
                                    <th width="30%">文章标题</th>
                                    <th width="20%">更新时间</th>
                                    <th width="20%">类别</th>
                                    <th width="10%">操作</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ls']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ls']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['artlist']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
                                <tr class="gradeX">
                                    <td><?php echo $_smarty_tpl->tpl_vars['artlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['art_id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['artlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['title'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['artlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['pubdate'];?>
</td>
                                    <td class="center"><?php echo $_smarty_tpl->tpl_vars['artlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['cat_name'];?>
</td>
                                    <td class="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="mws-ic-16 ic-edit" href="<?php echo @constant('SERVER');?>
admin.php?c=art&a=artEdit&id=<?php echo $_smarty_tpl->tpl_vars['artlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['art_id'];?>
"><img src="<?php echo @constant('ADMIN_TPL');?>
css/icons/16/edit.png"/></a>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a class="mws-ic-16 ic-cross" href="<?php echo @constant('SERVER');?>
admin.php?c=art&a=artDel&id=<?php echo $_smarty_tpl->tpl_vars['artlist']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ls']['index']]['art_id'];?>
"><img src="<?php echo @constant('ADMIN_TPL');?>
css/icons/16/cross.png"/></a></td>
                                </tr>
                             <?php endfor; endif; ?>  
                            </tbody>
                        </table>
                        <div class="dataTables_info">Total : <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 items</div>
						<div class="dataTables_paginate paging_full_numbers">
							<?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

						</div>
						<input type="hidden" value="" class="getnum"/>
                        </div>
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
