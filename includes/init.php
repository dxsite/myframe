<?php
defined('Access') || exit('access denied');


define(ROOT,str_replace('\\','/',str_replace('includes\init.php','',__FILE__)));




include(ROOT . 'data/global_data.php');
include(ROOT . 'includes/conf.class.php');
include(ROOT . 'includes/Controller.class.php');
include(ROOT . 'includes/View.class.php');
include(ROOT . 'includes/Model.class.php');
include(ROOT . 'libs/helper/Upload.class.php');
include(ROOT . 'libs/helper/Page.class.php');
include(ROOT . 'libs/helper/Folder.class.php');
if(get_magic_quotes_gpc()!=1){
}


session_start();





