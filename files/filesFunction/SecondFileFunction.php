<?php
include "../config/config.php";
$dir = "../assets/2.txt";
$str="Bye World". PHP_EOL;
// file_put_contents($dir,$str,FILE_APPEND);
$getContent=file_get_contents($dir);
printValue(nl2br($getContent)); 
printValue(filesize($dir));
printValue(filetype($dir));
$list=glob('*/*.php');
var_dump($list);
