<?php
include_once "../config.php";
sleep(2);
$province = $_POST['province'];
if (strlen($province) < 2) {
    msg("نام استان باید حداقل 2 حرف باشد.", "error");
    die();
}
try {
    $query = "INSERT INTO province (name) values (?)";
    $stmt = $db->prepare($query);
    $stmt->execute([$province]);
    msg("استان $province با موفقیت افزوده شد." . PHP_EOL);
} catch (PDOException $e) {
    msg("مشکلی به وجود آمده است." . PHP_EOL . $e->getMessage(), "error");
}
