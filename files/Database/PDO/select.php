<?php
include_once "connect.php";
echo "<br>";
// $query = "SELECT * FROM people";
// $stmt = $db->prepare($query);
// $stmt->execute();
// $row = $stmt->fetchAll(PDO::FETCH_OBJ);
// print_r($row);

$query = "SELECT * FROM people ";
$stmt = $db->prepare($query);
$result = $db->query($query);
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $sex = ($row["sex"] == "f") ? "she" : "he";
    $isSingle = ($row["isSingle"] == "1") ? "single" : "married";
    echo "{$row["fullName"]} is {$row["age"]} years old and $sex is  $isSingle <br>";
}
