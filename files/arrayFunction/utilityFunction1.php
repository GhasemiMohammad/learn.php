<?php
    include("print.php");
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
