<?php
define(Access, 'index');
include('./includes/init.php');

define(SERVER,str_replace('index.php','','http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));
define(HOME_TPL, SERVER.'view/Home/');


function __autoload($class){
	if((stripos($class,'Model')) !== false) {
		include(ROOT . 'model/'.$class.'.class.php');
	}else if((stripos($class,'Action')) !== false){
		include(ROOT . 'controller/Home/'.$class.'.class.php');
	}
}

$a = new Controller();
$a->Run();