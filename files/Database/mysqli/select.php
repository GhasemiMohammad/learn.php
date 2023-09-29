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

#smtp method

// $query = "SELECT * FROM people";
// $smtp = $mySqlI->prepare($query);
// $smtp->execute();
// $smtp->bind_result($id, $fullName, $age, $sex, $isSingle);
// $smtp->fetch();
//  while ($smtp->fetch()) {
//      echo "<br> " . $age;

// }

$query = "SELECT * FROM people";
$smtp = $mySqlI->prepare($query);
$smtp->execute();

$smtp->store_result();
echo "<br>";
echo $smtp->affected_rows;
print_r($smtp);
echo "<br>";
