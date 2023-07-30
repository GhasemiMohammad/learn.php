<?php
    function sum(float $a=null, float $b=null):float{
        return $a+$b;
    }
    echo sum(10.1,20.1)."<br>";

   $funk= function (float $a=null, float $b=null):float{
        return $a+$b;
    };

    echo $funk(10,3)."<br>";

    function changeName(string $name=null){
        $result=array(
            "upper"=> strtoupper($name),
            "lower"=>strtolower($name)
        );
        return $result;    
    }
    $funk=changeName("mamad");
    echo $funk["upper"];

    $list=[1,2,3,4,5,6];
    
    function number($lists,$doSTH){
        $newList=[];
        foreach($lists as $key=>$value)
            $newList[$key]=$doSTH($value);

        return $newList;
    }

   $out= number($list,function($num){
        return $num*2;
    });

    var_dump($out);
    
