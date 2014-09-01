<?php

include('Page.class.php');

$page = new Page('200','5',20);

$str = $page->show();

echo $str;

?>