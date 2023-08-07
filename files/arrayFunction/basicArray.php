<?php
    include("../config/config.php");
    /* -------------------------------*/
    echo "get size of array ".br();
    printValue(count($names));
    printValue(sizeof($names));
    /* -------------------------------*/
    echo "get array keys ".br();
    printArray(array_keys($user));
    /* -------------------------------*/
    echo "get array value ".br();
    printArray(array_values($user));
    /* -------------------------------*/
    echo "array key exists ".br();
    if(array_key_exists("tel",$user))
        printValue("yes it is");
    else
    printValue("no it`s not");
    /* -------------------------------*/
    echo "in array ".br();
    if(in_array("Giti",$user))
        printValue("yes it is");
    else
    printValue("no it`s not");
    /* -------------------------------*/
    echo "is array ".br();
    if(is_array($user))
        printValue("yes it is");
    else
    printValue("no it`s not");
    /* -------------------------------*/
    echo "shuffle array ".br();
    printArray($names);
    shuffle($names);
    printArray($names);


