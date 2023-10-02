<?php
include_once "connect.php";
// $query = "SELECT * FROM people WHERE sex = 'f'";
// $result = $mySqlI->query($query);
// echo "<pre>";
#print_r($result->fetch_all());
// while ($row = $result->fetch_assoc()) {
//     foreach ($row as $key => $value) {
//         echo $key . "=>" . $value . "<br>";
//         if ($key == "isSingle")
//             echo "<hr>";
//     }
// }

// echo "<pre>";

#stmt method

// $query = "SELECT * FROM people";
// $stmt = $mySqlI->prepare($query);
// $stmt->execute();
// $stmt->bind_result($id, $fullName, $age, $sex, $isSingle);
// $stmt->fetch();
//  while ($stmt->fetch()) {
//      echo "<br> " . $age;

// }

$query = "SELECT * FROM people";
$stmt = $mySqlI->prepare($query);
$stmt->execute();

$stmt->store_result();
echo "<br>";
echo $stmt->affected_rows;
print_r($stmt);
echo "<br>";
