<?php
include('./includes/init.php');

function __autoload($class){
	include(ROOT . 'controller/Home/'.$class.'.class.php');
}
$a = new Controller();
$a->Run();