<?php
$mySqlI = new mysqli("localhost", "root", "", "world");
if ($mySqlI->connect_errno) {
    echo "failed connected to database" . $mySqlI->connect_error;
} else
    echo "connected to database";
$mySqlI->set_charset("utf8");
