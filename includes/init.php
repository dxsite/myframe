<?php




define(ROOT,str_replace('\\','/',str_replace('includes\init.php','',__FILE__)));

include(ROOT . 'includes/conf.class.php');
include(ROOT . 'includes/mysql.class.php');
include(ROOT . 'includes/Controller.class.php');
include(ROOT . 'includes/View.class.php');
include(ROOT . 'controller/Index.class.php');
function __autoload($class){
	
}

if(get_magic_quotes_gpc()!=1){
}









