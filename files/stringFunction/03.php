<?php
    $str="Hello World !";
    $str2 = "hello world!";
    $number = 100000000;
    /* -------------------------------*/
    echo "this is stripos function : "."<br>";
    echo stripos ($str,"world");
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is strpos function : it is case sensitive "."<br>";
    echo strpos ($str,"World");
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is md5 function : "."<br>";
    echo md5($str);
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is htmlentities function : "."<br>";
    $link='<a href="https://www.google.com">Go to Google</a>';
    echo $link."<br>";
    echo $entity=htmlentities($link);
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is html_entity_decode function : "."<br>";
    echo html_entity_decode($entity);
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is htmlSpecialChars function : "."<br>";
    $text="This is some &lt;b&gt;bold&lt;/b&gt; text. <br>";
    echo $text;
    echo $code=htmlspecialchars($text);
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is htmlSpecialChars_decode function : "."<br>";
    echo html_entity_decode($code);
    /* -------------------------------*/
    echo "<hr>";
    /* -------------------------------*/
    echo "this is stript_tags function : "."<br>";
    echo strip_tags("Hello <b>world!</b>");
    /* -------------------------------*/
    echo "<hr>";