<?php
include_once "connect.php";
// $query = "DELETE from people WHERE isSingle = 1";

// if ($mySqlI->query($query)) {
//     echo "delete rows successfully" . PHP_EOL;
//     echo $mySqlI->affected_rows . " rows deleted";
// } else {
//     echo "failed";
// }

#smtp method
$age = 50;
$query = "DELETE FROM people WHERE age > ?";
$smtp = $mySqlI->prepare($query);
$smtp->bind_param('i', $age);
if ($smtp->execute()) {
    echo "delete rows successfully" . PHP_EOL;
    echo $mySqlI->affected_rows . " rows deleted";
} else {
    echo "failed";
}
$smtp->close();
