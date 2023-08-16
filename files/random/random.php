<?php 
    include '../config/config.php';
    printValue(rand());
    printValue(rand(0,1));
    printValue(mt_rand(1,20));
    printValue(random_int(1,72));
    printValue(random_bytes(5));
    printValue(bin2hex(random_bytes(3)));
    function generateRandom(int $length){
        $chars='0123456789ABCDEFGHIKLMNOPQRSTVXYZ abcdefghiklmnopqrstvxyz()*?&!@#';
        $charsLength=strlen($chars);
        $random='';
        for($i=0;$i<=$length;$i++){
            $random .= $chars[mt_rand(0,$charsLength-1)];
        }
        return $random;
    };
    printValue(generateRandom(20));