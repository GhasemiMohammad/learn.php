<?php
include_once "connect.php";
try {
    $query = "DELETE FROM people WHERE sex = ? AND age > ?";
    $stmt = $db->prepare($query);
    $stmt->execute(["f", 50]);
    echo "Delete User successfully" . PHP_EOL . $stmt->rowCount() . " row[s] was Edited";
} catch (PDOException $e) {
    echo "delete User unsuccessfully" . PHP_EOL . $e->getMessage();
};
