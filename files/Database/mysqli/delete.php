<?php
include_once "connect.php";
// $query = "DELETE from people WHERE isSingle = 1";

// if ($mySqlI->query($query)) {
//     echo "delete rows successfully" . PHP_EOL;
//     echo $mySqlI->affected_rows . " rows deleted";
// } else {
//     echo "failed";
// }

#stmt method
$age = 50;
$query = "DELETE FROM people WHERE age > ?";
$stmt = $mySqlI->prepare($query);
$stmt->bind_param('i', $age);
if ($stmt->execute()) {
    echo "delete rows successfully" . PHP_EOL;
    echo $mySqlI->affected_rows . " rows deleted";
} else {
    echo "failed";
}
$stmt->close();
