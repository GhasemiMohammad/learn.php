<?php
sleep(1);
function msg($text, $class = 'success', $tag = "span")
{
    echo "<$tag class='$class'>$text</$tag>";
}
list($host, $dbName, $user, $pass) = ["localhost", "irancities", "root", ""];
try {
    $db = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8mb4", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    msg("Failed connect to database. Error : " . $e->getMessage() . PHP_EOL, "error");
    exit();
}
