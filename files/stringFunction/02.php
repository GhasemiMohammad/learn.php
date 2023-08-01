<?php    
    $str="Hello World!";
    $str2 = "hello world!";
    $number = 100000000;
    /* -------------------------------*/
    echo "this is explode function : "."<br>";
    $explodes=explode(" ",$str);
    foreach($explodes as $explode)
        echo $explode."<br>";
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is implode function : "."<br>";
    echo implode(" ",$explodes);
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is substr function : "."<br>";
    echo substr($str,6);
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is strstr function : "."<br>";
    echo strstr($str,"l");
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is str_replace function : "."<br>";
    echo str_replace("World","Shervin",$str);
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is str_repeat function : "."<br>";
    echo str_repeat("Hello ",10);
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is str_word_count function : "."<br>";
    echo str_word_count ($str);
    /* -------------------------------*/
    echo "<hr>";
    