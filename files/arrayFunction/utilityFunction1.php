<?php
    include("print.php");
    $rgb=["r"=>"red","g"=>"green","b"=>"blue"];
    $cmyk=["c"=>"cyan","m"=>"magenta","y"=>"yellow","k"=>"black"];
    $favColor=["y"=>"yellow","k"=>"black","g"=>"green","c"=>"cyan","b"=>"black"];
    printArray($numbers);
    /* -------------------------------*/
    echo "max ".br();
    printValue(max($numbers));
    /* -------------------------------*/
    echo "min ".br();
    printValue(min($numbers));
    /* -------------------------------*/
    echo "end ".br();
    printValue(end($numbers));
    /* -------------------------------*/
    echo "array sum ".br();
    printValue(array_sum($numbers));
    /* -------------------------------*/
    echo "array rand ".br();
    printValue(array_rand($user));
    /* -------------------------------*/
    echo "array chunk ".br();
    printArray(array_chunk($user,2));
    /* -------------------------------*/
    echo "array reverse ".br();
    printArray(array_reverse($user));
    /* -------------------------------*/
    echo "array search ".br();
    printArray(array_search(-15,$numbers));
    /* -------------------------------*/
    echo "array merge ".br();
    printArray(array_merge($rgb,$cmyk));
    /* -------------------------------*/
    echo "array unique ".br();
    printArray(array_unique($favColor));
    /* -------------------------------*/
    echo "array difference ".br();
    printArray(array_diff_key($favColor,$rgb));
    /* -------------------------------*/
    echo "array slice ".br();
    print_r($user);
    printArray(array_slice($user,1));
    

