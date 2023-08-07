<?php
    include("../config/config.php");
    printArray($numbers);
    /* -------------------------------*/
    echo "array filter ";
    function odd(int $value){
        return($value &1);
    }
    printArray(array_filter($numbers,"odd"));
    /* -------------------------------*/
    echo "compact";
    $Fname="Mahsa";
    $Lname="Amini";
    $age=22;
    $makeArr=compact('Fname','Lname','age');
    printArray($makeArr);
    /* -------------------------------*/
    echo "extract";
    extract($makeArr);
    echo "\$Fname = $Fname; \$Lname = $Lname; \$age = $age";