<?php
list($host, $dbName, $user, $pass) = ["localhost", "world", "root", ""];

try {
    $db = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8mb4", $user, $pass);
    echo "successfully connect to database " . PHP_EOL;
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed connect to database. Error : " . $e->getMessage() . PHP_EOL;
    exit();
}
