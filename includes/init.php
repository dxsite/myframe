<?php
defined('Access') || exit('access denied');


define(ROOT,str_replace('\\','/',str_replace('includes\init.php','',__FILE__)));




include(ROOT . 'data/global_data.php');
include(ROOT . 'includes/conf.class.php');
include(ROOT . 'includes/Controller.class.php');
include(ROOT . 'includes/View.class.php');
include(ROOT . 'includes/Model.class.php');
include(ROOT . 'includes/Template.class.php');
include(ROOT . 'libs/helper/Upload.class.php');
include(ROOT . 'libs/helper/Page.class.php');
include(ROOT . 'libs/helper/Folder.class.php');
if(!get_magic_quotes_gpc()) {
    array_walk_recursive($_GET,'addslashes_real');
    array_walk_recursive($_POST,'addslashes_real');
    array_walk_recursive($_COOKIE,'addslashes_real');
}



session_start();





