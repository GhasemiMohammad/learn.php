<?php
include_once "connect.php";

// try {
//     $query = "INSERT INTO people (fullName,age,sex) values (?,?,?)";
//     $stmt = $db->prepare($query);
//     $stmt->execute(["abbas bouazar", 40, "m"]);
//     echo "add user successfully" . PHP_EOL;
// } catch (PDOException $e) {
//     echo "add user unsuccessfully " . PHP_EOL . $e->getMessage();
// }

#associative array 
// try {
//     $query = "INSERT INTO people (fullName,age,sex,isSingle) values (:fullName,:age,:sex,:isSingle)";
//     $stmt = $db->prepare($query);
//     $stmt->execute(["fullName" => "Moharam NavidKia", "age" => 42, "isSingle" => 0, "sex" => "m"]);
//     echo "add user successfully" . PHP_EOL;
//     echo $db->lastInsertId();
// } catch (PDOException $e) {
//     echo "add user unsuccessfully " . PHP_EOL . $e->getMessage();
// }

// $db->beginTransaction();
// try {
//     $footballPlayers = [
//         ["Ali Karimi", 50, "m"],
//         ["Ali Daei", 52, "m"],
//         ["Moharam Navidkia", 42, "m"],
//         ["Mehdi torabi", 28, "m"],
//         ["Karim Bagheri", 53, "m"]
//     ];
//     $query = "INSERT INTO people (fullName,age,sex) values (?,?,?)";
//     $stmt = $db->prepare($query);
//     foreach ($footballPlayers as $footballPlayer) {
//         $stmt->execute($footballPlayer);
//         if ($footballPlayer[0] == "Mehdi torabi") {
//             echo "insert players to db is failed";
//             $db->rollBack();
//             exit();
//         }
//         echo "add user successfully ID : " . $db->lastInsertId() . "<br>";
//     }
//     echo "fuck u";
//     $db->commit();
// } catch (PDOException $e) {
//     echo "add user unsuccessfully " . PHP_EOL . $e->getMessage();
// };


