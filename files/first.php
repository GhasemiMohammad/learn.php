<?php


/*
    echo "Hello World";
    echo "Hello World";
    echo "Hello World";
    echo "Hello World";
    echo "Hello World";
*/
    #echo "Hello World";
    //echo "Hello World";

    echo "Hello"." "."World"."!";
    echo "<br>";
    $a="hello";
    echo '$a World';
    echo "<br>";
    var_dump($a);
    echo "<br>";
    print_r($a);
    echo "<br>";
    echo strlen($a);
    echo "<br>";
    const URL="WWW.Google.com";
    echo URL;
    echo "<br>";
    define("LINK","www.yahoo.com",1);
    echo link;
    echo "<br><br>";
    $b=0X1A;
    echo $b;

    $a.=" world!";
    echo "<br>";
    echo $a;

    echo "<hr>";
    $x=10;
    $y=10;
    if($x!=$y)
        echo "yes";
    else
        echo "no";
    echo "<hr>";
    $f=10;
    $s=11;
    echo $f<=>$s;
    echo "<hr>";
    #indexed array
    $arr=array(1,2,3,4);
    print_r($arr);
    echo "<br>";
    var_dump($arr);
    echo "<hr>";
    #associative array
    $capitals = array("Iran"=>"Tehran","England"=>"London","USA"=>"Washington DC",
    "Pakistan"=>"IslamAbad","Turkey"=>"Ankara","Japan"=>"Tokyo");
    print_r($capitals);
    echo "<br>";
    var_dump($capitals);
    echo "<br>";
    echo $capitals["Iran"];
    echo "<hr>";
    $user=array("0"=>["name"=>"Ali",
    "family"=>"Hashemi",
    "age"=>18,
    "email"=>"ali@gmai.com"],
    1=>["name"=>"Mamad",
    "family"=>"Mamadi",
    "age"=>23,
    "email"=>"mamad@gmai.com"],
    "2"=>["name"=>"Maryam",
    "family"=>"Moradi",
    "age"=>31,
    "email"=>"Maryam@gmai.com"]);
    var_dump($user);
    echo $user["0"]["name"];
    echo "<hr>";
    $json=json_encode($user);
    echo $json;
    $Json=json_decode($json,0);
    var_dump($Json);
    echo "<hr>";
    echo "<hr>";
    $objUser=(object) $user;
    var_dump($objUser);
     echo "<hr>";
     $car = new stdClass;
     $car->name="audi";
     $car->model=2019;
     $car->gearbox="automatic";
    var_dump($car);
    echo $car->name;
    $car2=clone $car;
    $car2->name="bmw";
    var_dump($car2);
    var_dump($car);
    echo "<hr>";
    foreach($capitals as $key=>$capital)
    {
        echo $key . "`s capital is : ". $capital ."<br>";
    }
    echo "<hr>";
    function sayFuck($name)
    {
        return "fuck u ".$name;
    }
    echo sayFuck("felani");

    echo "<br>";

    function sum($a=null , $b=10, $c=null){
        return $a+$b+$c;
    }
    echo sum(5,3,10)."<br>";

    function sum2(){
        $arg=func_get_args();
        return array_sum($arg);
    }
    echo sum2(10,20,15,31,47,55,2)."<br>";

     function sum3(...$args){
        return array_sum($arg);
    }
    echo sum2(10,20,15,31,47,55,4)."<br>";

    function byValue(&$num=23){
        return $num*=$num;
    }
    echo byValue()."<br>";

    $msg="Hello World!";
   
    function scope(){
         global $msg;
        return $msg;
    }
    $func=scope();
    echo $func;
    echo "<hr>";




