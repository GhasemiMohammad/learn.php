<?php
/*
    $x=10;
    $y=9;
    function sum(){
        $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
    }
    sum();
#    var_dump($GLOBALS);
    var_dump($_SERVER);
    echo "<br>".$_SERVER['PHP_SELF'];
    */
    if(isset($_GET['send'])&& $_SERVER['REQUEST_METHOD']=="GET"){
        if(!empty($_GET['firstName'])&& !empty($_GET['lastName'])){
            echo "Fuck u";
        }
        else 
            echo "fuck u more";
    }
    else
        echo "Bia";
    echo "<br>" . time();

    setcookie("user","mamad",time()+2592000,"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <style>
        div.form>input{
            display: block;
            margin: 15px;
        }
    </style>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="GET">
        <div class="form">
            <label for="firstName">your Name : </label>
            <input type="text" name="firstName" autocomplete="off">
            <label for="firstName">your Last Name : </label>
            <input type="text" name="lastName" autocomplete="off">
            <input type="submit" name="send" value="send">
        </div>
    </form>
</body>
</html>
