<?php
    include "../config/config.php";
    $a=10;
    $b=null;
    //get type
    printValue(gettype($a));
    //empty or not
    if(empty($a))
        printValue("yes it is empty");
    else
        printValue("no it is not");
    //isset or not
    if(isset($b))
        printValue("yes it is isset");
    else
        printValue("no it is not");
    //is array ?
    $array=["10","20",30,40];
    if(is_array($array))
        printValue("yes it is array");
    else
        printValue("no it is not");
    //is int ?
    if(is_int($a))
        printValue("yes it is integer");
    else
        printValue("no it is not");
    //is iterable ?
    if(is_iterable($array))
        printValue("yes it is iterable");
    else
        printValue("no it is not");
    //is readable ?
    if(is_readable("../config/config.php"))
        printValue("yes it is readable");
    else
        printValue("no it is not");
    // int val ?
    if(intval($b))
        printValue("yes it is int");
    else
        printValue("no it is not");
    // serialize
    $data = serialize(array("Red", "Green", "Blue"));
    printValue($data);
    