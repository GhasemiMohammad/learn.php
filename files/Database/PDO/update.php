<?php
include_once "connect.php";

// try {
//     $query = "UPDATE People SET sex = ? WHERE id = ? ";
//     $stmt = $db->prepare($query);
//     $stmt->execute(["m", 43]);
//     echo "Update User successfully" . PHP_EOL . $stmt->rowCount() . "rows was Edited";
// } catch (PDOException $e) {
//     echo "Update User unsuccessfully" . PHP_EOL . $e->getMessage();
// }

try {
    $query = "UPDATE People SET isSingle =:isSingle WHERE age >:age";
    $stmt = $db->prepare($query);
    $stmt->execute(["age" => 41, "isSingle" => 0]);
    echo "Update User successfully" . PHP_EOL . $stmt->rowCount() . "rows was Edited";
} catch (PDOException $e) {
    echo "Update User unsuccessfully" . PHP_EOL . $e->getMessage();
}
