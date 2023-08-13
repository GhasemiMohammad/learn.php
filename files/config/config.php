<?php
    date_default_timezone_set("Asia/Tehran");
    $names=array("Shervin","Shahrzad","Aria","Roodabe");
    $user=array("name"=>"Giti","family"=>"Iran Nejad","age"=>22,"gender"=>"female");
    $numbers=[1,20,15,105,18,17,19,24,79,83,169,85,-15,20];
    function printArray($value){
        echo "<pre>";
            print_r($value);
        echo "</pre>";
        echo "<hr>";
    }
    function printValue($value){
        echo "<pre>";
            echo($value);
        echo "</pre>";
        echo "<hr>";
    }
    function normalPrint($value){
        echo $value ."<br>";
    }
    
    function br(){
        echo "<br>";
    }
?>