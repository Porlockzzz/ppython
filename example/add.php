<?php
require_once("../lib/php_python.php");
$p1 = 2;
$p2 = 3;
$ret = ppython("testModule::add",$p1,$p2);
echo "返回信息: ".$ret; 
?>