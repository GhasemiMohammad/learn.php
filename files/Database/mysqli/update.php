<?php
include_once "connect.php";

// $query = "UPDATE people set isSingle = 1 WHERE isSingle = 0";
// if ($mySqlI->query($query)) {
//     echo "update rows successfully" . PHP_EOL;
//     echo $mySqlI->affected_rows . " rows changed";
// } else {
//     echo "failed";
// }

#smtp method
$query = "UPDATE people set isSingle = ? WHERE isSingle = ?";
$setValue = 0;
$conditionValue = 1;
$smtp = $mySqlI->prepare($query);
$smtp->bind_param("ii", $setValue, $conditionValue);
if ($smtp->execute()) {
    echo "update rows successfully" . PHP_EOL;
    echo $mySqlI->affected_rows . " rows changed";
} else {
    echo "failed";
}
$smtp->close();
