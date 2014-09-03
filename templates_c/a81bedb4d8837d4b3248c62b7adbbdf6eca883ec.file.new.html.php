<?php /* Smarty version Smarty-3.1.19, created on 2014-08-25 07:45:43
         compiled from "D:\DedeAMPZ\WebRoot\luo\myframe\view\Home\new.html" */ ?>
<?php /*%%SmartyHeaderCode:300153fad8ab8e5369-46456653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a81bedb4d8837d4b3248c62b7adbbdf6eca883ec' => 
    array (
      0 => 'D:\\DedeAMPZ\\WebRoot\\luo\\myframe\\view\\Home\\new.html',
      1 => 1408952742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300153fad8ab8e5369-46456653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53fad8ab984ef2_41135310',
  'variables' => 
  array (
    'catlist' => 0,
    'cat' => 0,
    'info' => 0,
    'prev' => 0,
    'next' => 0,
    'artlist' => 0,
    'art' => 0,
    'j' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53fad8ab984ef2_41135310')) {function content_53fad8ab984ef2_41135310($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\DedeAMPZ\\WebRoot\\luo\\myframe\\libs\\plugins\\modifier.date_format.php';
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
    <h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">模板分享</a>><a href="1/">个人博客模板</a></h2>
    <div class="index_about">
      <h2 class="c_titile"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</h2>
      <p class="box_c"><span class="d_time">发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['info']->value['pubdate'],'%Y-%m-%d');?>
</span><span>编辑：杨青</span><span>浏览（390）</span><span>评论览（14）</span></p>
      <ul class="infos">
        <?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>

      </ul>
      <div class="keybq">
        <p><span>关键字词</span>：<?php echo $_smarty_tpl->tpl_vars['info']->value['keywords'];?>
</p>
      </div>
      <div class="nextinfo">
        <p>上一篇：<?php echo $_smarty_tpl->tpl_vars['prev']->value;?>

        <p>下一篇：<?php echo $_smarty_tpl->tpl_vars['next']->value;?>
</p>
      </div>
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
        <?php  $_smarty_tpl->tpl_vars['art'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['art']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['artlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['art']->key => $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['art']->_loop = true;
?>
          <li><a href="index.php?c=art&a=indexs&art_id=<?php echo $_smarty_tpl->tpl_vars['art']->value['art_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['art']->value['title'];?>
</a></li>
        <?php } ?>
        </ul>
      </div>
    </div>
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
          <dd>
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
