<?php

define(ROOT,str_replace('\\','/',str_replace('includes\init.php','',__FILE__)));




include(ROOT . 'data/global_data.php');
include(ROOT . 'includes/conf.class.php');
include(ROOT . 'includes/Controller.class.php');
//include(ROOT . 'includes/Template.class.php');
include(ROOT . 'includes/View.class.php');
include(ROOT . 'includes/Model.class.php');

if(get_magic_quotes_gpc()!=1){
}









