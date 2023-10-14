<?php
sleep(2);
$province = $_POST['province'];
function msg($text, $class = 'success')
{
    echo "<span class='$class'>$text<span>";
}
list($host, $dbName, $user, $pass) = ["localhost", "irancities", "root", ""];
if (strlen($province) < 2) {
    msg("نام استان باید حداقل 2 حرف باشد.", "error");
    die();
}
try {
    $db = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8mb4", $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    msg("Failed connect to database. Error : " . $e->getMessage() . PHP_EOL, "error");
    exit();
}
try {
    $query = "INSERT INTO province (name) values (?)";
    $stmt = $db->prepare($query);
    $stmt->execute([$province]);
    msg("استان $province با موفقیت افزوده شد." . PHP_EOL);
} catch (PDOException $e) {
    msg("مشکلی به وجود آمده است." . PHP_EOL . $e->getMessage(), "error");
}
