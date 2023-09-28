<?php
$mySqlI = new mysqli("localhost", "root", "", "world");
if ($mySqlI->connect_errno) {
    echo "failed connected to database" . $mySqlI->connect_error . PHP_EOL;
    exit();
} else
    echo "connected to database" . PHP_EOL;
$mySqlI->set_charset("utf8");
