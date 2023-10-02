<?php
include_once "connect.php";

// $query = "UPDATE people set isSingle = 1 WHERE isSingle = 0";
// if ($mySqlI->query($query)) {
//     echo "update rows successfully" . PHP_EOL;
//     echo $mySqlI->affected_rows . " rows changed";
// } else {
//     echo "failed";
// }

#stmt method
$query = "UPDATE people set isSingle = ? WHERE isSingle = ?";
$setValue = 0;
$conditionValue = 1;
$stmt = $mySqlI->prepare($query);
$stmt->bind_param("ii", $setValue, $conditionValue);
if ($stmt->execute()) {
    echo "update rows successfully" . PHP_EOL;
    echo $mySqlI->affected_rows . " rows changed";
} else {
    echo "failed";
}
$stmt->close();
