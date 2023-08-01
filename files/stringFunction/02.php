<?php    
    $str="Hello World !";
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
    /* -------------------------------*/
    echo "this is strtok function : "."<br>";
    $token=strtok($str," ");
    while ($token !== false)
   {
   echo "$token<br>";
   $token = strtok(" ");
   }
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is str_shuffle function : "."<br>";
    echo str_shuffle ("hello");
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is print_f function : "."<br>";
    $age = 22;
    $city="Tehran";
    printf("Shahrzad is a girl and she is %u years old and live in %s",$age,$city);
    /* -------------------------------*/
    echo "<hr>";