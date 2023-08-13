<?php
    include "../config/config.php";
    include "../config/jdf.php";
    printValue(jdate("Y/m/d H:i:s a"));

    function convertToJalali(string $date){
        list($Y,$m,$d)=explode("/",$date);
        $timeStamp=mktime($m,$d,$Y);
        return jdate("Y/m/d",$timeStamp,"","Asia/Tehran","en");
    }

    function convertToGregorian(string $jalali){
        list($jY,$jm,$jd)=explode("/",$jalali);
        return jalali_to_gregorian($jY,$jm,$jd,"/");
    }
    $gregorian=date("Y/m/d");
    $Shamsi=convertToJalali($gregorian);
    printValue($Shamsi);
    printValue(convertToGregorian($Shamsi));

    
 
    
