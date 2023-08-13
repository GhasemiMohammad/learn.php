<?php
    include "../config/config.php";
    //time function: 
    normalPrint("time function : ");
    printValue(time());
    printValue(date("m/d/Y"),time());
    //time function: 
    printValue(mktime(10,44,32,10,23,2001));  
    $timestamp = 1691921844; 

    $dateTime = date('Y-m-d H:i:s', $timestamp);  
    printValue($dateTime);  

    printValue(strtotime("tomorrow"));

    printValue(microtime());