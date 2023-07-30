<?php
 /* -------------------------------*/
    echo "this is is_string function : "."<br>";
    $str="Hello World! Hello";
    $str2 = "hello world!";
    $number = 100000000;
    if(is_string($str))
        echo "yes it is";
    else
        echo "No it is not";
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is strlen function : "."<br>";
    echo "length of {$str} is : ".strlen($str);
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is lcfirst function : "."<br>";
    echo $str. " to " . lcfirst($str);
    /* -------------------------------*/
    echo "<hr>";
     /* -------------------------------*/
    echo "this is ucfirst function : "."<br>";
    echo $str2. " to " . ucfirst($str2);
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is ucwords function : "."<br>";
    echo $str2. " to " . ucwords($str2);
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is strtoupper function : "."<br>";
    echo $str. " to " . strtoupper($str);
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is strtolower function : "."<br>";
    echo $str. " to " . strtolower($str);
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is ltrim function : "."<br>";
    echo $str. " to " . ltrim($str,"Hello");
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is rtrim function : "."<br>";
    echo $str. " to " . rtrim($str,"Hello");
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is trim function : "."<br>";
    echo $str. " to " . trim($str,"Hello");
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is number_format function : "."<br>";
    echo $number. " to " . number_format($number);
    /* -------------------------------*/
    echo "<hr>";
        /* -------------------------------*/
    echo "this is nl2br function : "."<br>";
    echo "without nl2br :  this is one line \n this is another line"."<br>";
    echo "with nl2br : ". nl2br("without nl2br :  this is one line \n this is another line");
    /* -------------------------------*/
    echo "<hr>";
