<?php
    include "../config/config.php";
    //show year : 
    normalPrint("show year : ");
    normalPrint(date("Y"));
    printValue(date("y"));
    // show month
    normalPrint("show month : ");
    normalPrint(date("M"));
    printValue(date("m"));
    // show day
    normalPrint("show day : ");
    normalPrint(date("D"));
    printValue(date("d"));
    // day of week
    normalPrint("show day of week : ");
    normalPrint(date("l"));
    printValue(date("L"));
    // show date
    normalPrint("show date : ");
    printValue(date("m/d/Y"));

    //time : 

    //show hour
    normalPrint("show hour ");
    normalPrint(date("H"));
    printValue(date("h"));
    //show minute
    normalPrint("show minute ");
    printValue(date("i"));
    //show second
    normalPrint("show second ");
    printValue(date("s"));
     //A.M or P.M
    normalPrint("A.M or P.M");
    printValue(date("a"));

    //show time
    normalPrint("show time");
    printValue(date("h:i:s a"));