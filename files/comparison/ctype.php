<?php
    include "../config/config.php";
    $arr=[10,"Mahsa","mehrshad",15,"/n","John 47"];
    
    $alnum="john10";
    $str = "Mahsa";
    $cntrl="\t\n";
    $num='10';
    $space="asdf\n\r\t";
    printValue(ctype_alnum($alnum));
    printValue(ctype_alpha($str));
    printValue(ctype_cntrl($cntrl));
    printValue(ctype_digit($num));
    printValue(ctype_graph($space));
