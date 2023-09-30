<?php
include_once "connect.php";
function insert($name, $age, $sex, $isSingle)
{
    global $mySqlI;
    $query2 = "INSERT INTO people (fullName, age , sex, isSingle) VALUES (?,?,?,?)";
    $stmt = $mySqlI->prepare($query2);
    $stmt->bind_param('sisi', $name, $age, $sex, $isSingle);
    if ($stmt->execute()) {
        echo "add user successfully" . PHP_EOL;
    } else {
        echo "add user unsuccessfully" . PHP_EOL;
        echo "<pre>";
        print_r($stmt);
        echo "</pre>";
    }

    $stmt->close();
}

insert("Shahrzad Kiani", 22, "f", 1);
