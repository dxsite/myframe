<?php /* Smarty version Smarty-3.1.19, created on 2014-08-25 08:12:35
         compiled from "D:\DedeAMPZ\WebRoot\luo\myframe\view\Home\newlist.html" */ ?>
<?php /*%%SmartyHeaderCode:2817253faebf00f9310-74017417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1edbf392d7935bed1c69e8d554972a3081158b4' => 
    array (
      0 => 'D:\\DedeAMPZ\\WebRoot\\luo\\myframe\\view\\Home\\newlist.html',
      1 => 1408954352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2817253faebf00f9310-74017417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53faebf016a660_14633900',
  'variables' => 
  array (
    'catlist' => 0,
    'cat' => 0,
    'artlist' => 0,
    'art' => 0,
    'j' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53faebf016a660_14633900')) {function content_53faebf016a660_14633900($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\DedeAMPZ\\WebRoot\\luo\\myframe\\libs\\plugins\\modifier.date_format.php';
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>黑色Html5响应式个人博客模板――主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="<?php echo @constant('HOME_TPL');?>
css/base.css" rel="stylesheet">
<link href="<?php echo @constant('HOME_TPL');?>
css/style.css" rel="stylesheet">
<link href="<?php echo @constant('HOME_TPL');?>
css/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="<?php echo @constant('HOME_TPL');?>
js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<div class="ibody">
  <header>
    <h1>如影随形</h1>
    <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
    <div class="logo"><a href="/"></a></div>
    <nav id="topnav"><a href="index.html">首页</a><a href="about.html">关于我</a>
    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
      <a href="/"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</a>
    <?php } ?>
    </nav>
  </header>
  <article>
    <h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">慢生活</a></h2>
    <div class="bloglist">
    <?php  $_smarty_tpl->tpl_vars['art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['art']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['artlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['art']->key => $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['art']->_loop = true;
?>
      <div class="newblog">
        <ul>
          <h3><a href="/"><?php echo $_smarty_tpl->tpl_vars['art']->value['title'];?>
</a></h3>
          <div class="autor"><span>作者：杨青</span><span>分类：[<a href="/"><?php echo $_smarty_tpl->tpl_vars['art']->value['cat_name'];?>
</a>]</span><span>浏览（<a href="/">459</a>）</span><span>评论（<a href="/">30</a>）</span></div>
          <p><?php echo $_smarty_tpl->tpl_vars['art']->value['description'];?>
... <a href="/" target="_blank" class="readmore">全文</a></p>
        </ul>
        <figure><img src="images/001.jpg" ></figure>
        <div class="dateview"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['art']->value['pubdate'],'%Y-%m-%d');?>
</div>
      </div>
    <?php } ?>
    </div>
    <div class="page"><a title="Total record"><b>113</b></a><b>1</b><a href="/">2</a><a href="/">3</a><a href="/">4</a><a href="/">5</a><a href="/">&gt;</a><a href="/">&gt;&gt;</a></div>
  </article>
  <aside>
    <div class="rnav">
    <?php $_smarty_tpl->tpl_vars["j"] = new Smarty_variable("1", null, 0);?>
    <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['catlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
      <li class="rnav<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"><a href="/"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</a></li>
      <?php $_smarty_tpl->tpl_vars["j"] = new Smarty_variable($_smarty_tpl->tpl_vars['j']->value+1, null, 0);?>
    <?php } ?>
    </div>
    <div class="ph_news">
      <h2>
        <p>文章推荐</p>
      </h2>
      <ul class="ph_n">
      <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable("1", null, 0);?>
      <?php  $_smarty_tpl->tpl_vars['art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['art']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['artlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['art']->key => $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['art']->_loop = true;
?>
        <li><span class="num<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span><a href="index.php?c=art&a=indexs&art_id=<?php echo $_smarty_tpl->tpl_vars['art']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['title'];?>
</a></li>
        <?php $_smarty_tpl->tpl_vars["i"] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
      <?php } ?>
      </ul>
      
      <h2>
        <p>最新评论</p>
      </h2>
      <ul class="pl_n">
        <dl>
          <dt><img src="<?php echo @constant('HOME_TPL');?>
images/s8.jpg"> </dt>
          <dt> </dt>
          <dd>DanceSmile
            <time>49分钟前</time>
          </dd>
          <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo @constant('HOME_TPL');?>
images/s7.jpg"> </dt>
          <dt> </dt>
          <dd>yisa
            <time>2小时前</time>
          </dd>
          <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo @constant('HOME_TPL');?>
images/s6.jpg"> </dt>
          <dt> </dt>
          <dd>小林博客
            <time>8月7日</time>
          </dd>
          <dd><a href="/">博客色彩丰富，很是好看</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo @constant('HOME_TPL');?>
images/003.jpg"> </dt>
          <dt> </dt>
          <dd>DanceSmile
            <time>49分钟前</time>
          </dd>
          <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo @constant('HOME_TPL');?>
images/002.jpg"> </dt>
          <dt> </dt>
          <dd>yisa
            <time>2小时前</time>
          </dd>
          <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
        </dl>
      </ul>
      <h2>
        <p>最近访客</p>
        <ul>
          <img src="<?php echo @constant('HOME_TPL');?>
images/vis.jpg"><!-- 直接使用“多说”插件的调用代码 -->
        </ul>
      </h2>
    </div>
    <div class="copyright">
      <ul>
        <p> Design by <a href="/">DanceSmile</a></p>
        <p>蜀ICP备11002373号-1</p>
        </p>
      </ul>
    </div>
  </aside>
  <script src="<?php echo @constant('HOME_TPL');?>
js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>
<?php }} ?>
