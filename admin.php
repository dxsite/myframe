<?php
define(Access, 'admin');
include('./includes/init.php');

define(SERVER,str_replace('admin.php','','http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));
define(ADMIN_TPL, SERVER.'view/Admin/');

function __autoload($class){
	if((stripos($class,'Model')) !== false) {
		include(ROOT . 'model/'.$class.'.class.php');
	}else if((stripos($class,'Action')) !== false){
		include(ROOT . 'controller/Admin/'.$class.'.class.php');
	}
}


$a = new Controller();

$a->Run('admin');

if(!$_SESSION['username']){
	
}

