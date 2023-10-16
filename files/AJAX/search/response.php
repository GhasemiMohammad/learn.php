<?php
include_once "../config.php";
$value = $_POST["value"];
sleep(0.5);
if (strlen($value) > 1) {
    try {
        $sql = "SELECT name FROM province WHERE name LIKE :value";
        $stmt = $db->prepare($sql);
        $stmt->execute(["value" => $value . '%']);
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            msg($row["name"], "success", "p");
        }
    } catch (PDOException $e) {
        msg("we have problem." . $e->getMessage(), "error");
    }
}
