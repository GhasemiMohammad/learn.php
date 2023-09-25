<?php
include_once "connect.php";
$query = "
        CREATE TABLE *TABLE*(
        id int PRIMARY KEY AUTO_INCREMENT,
        fullName VARCHAR(256),
        age int UNSIGNED,
        sex ENUM('f','m'),
        isSingle BOOLEAN DEFAULT 1
    );";
for ($i = 0; $i <= 10; $i++) {
    $replace_name = str_replace("*TABLE*", "people$i", $query);
    if ($mySqlI->query($replace_name)) {
        echo "query is run" . PHP_EOL;
    } else
        echo "failed to run query" . PHP_EOL;
}
// for ($i = 0; $i <= 10; $i++) {
//     $delete = $mySqlI->query("DROP TABLE people$i");
// }




//var_dump($mySqlI);
