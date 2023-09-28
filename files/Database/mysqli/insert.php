<?php
include_once "connect.php";


$maleNames = array("علی احمدی", "محمد رضایی", "امیر حسینی", "محمدرضا صادقی", "حسن رحمانی", "مهدی کریمی", "علی رضاییان", "رضا میرزایی", "محمد علیزاده", "سعید نوروزی", "حسین قاسمی", "رضا محمدی", "علیرضا صمدی", "امیرعلی حقیقی", "محمدمهدی شاهمرادی", "حسین محمدپور", "مجید عبدالهی", "علیرضا رحمانی", "سید محمدی", "مهدی محمدزاده", "حمید رضایی", "علی اکبری", "محمود صالحی", "محمدصادق رضوی", "محمدجواد امینی", "مهراد محمدپور", "مجتبی احمدیان", "سعید حاجی‌زاده", "علی حسن‌زاده", "محمدرضا قربانی", "امیرحسین شجاع", "حسین میرزایی", "محمد رضازاده", "محمدحسین رضوانی", "علی اکبر قاسمی", "علی اصغری", "علی میری", "مهدی کاظمی", "سعید حسینیان", "حسین علوی", "محمدعلی رضایی", "امیرحسین محمدی", "مهدی محمدیان", "علی اصغر حقیقت", "رضا بهمنی", "محمدرضا شیرازی", "حسین پورمحمد", "محمد عبداللهی", "علیرضا محمدزاده");

$femaleNames = array("سارا احمدی", "مریم رضایی", "فاطمه حسینی", "لیلا صادقی", "نازنین رحمانی", "زهرا کریمی", "مهسا رضاییان", "زینب میرزایی", "مینا علیزاده", "سمیرا نوروزی", "ملیکا قاسمی", "مرضیه محمدی", "الهام صمدی", "نرگس حقیقی", "مریم شاهمرادی", "ناهید محمدپور", "شیما عبدالهی", "نازی رحمانی", "فریبا محمدی", "ریحانه محمدزاده", "نگین رضایی", "مهرناز اکبری", "مریم صالحی", "مریم رضوی", "زهرا امینی", "فاطمه محمدپور", "ملیسا احمدیان", "صفا حاجی‌زاده", "فاطمه حسن‌زاده", "فاطمه قربانی", "فاطمه شجاع", "فرزانه میرزایی", "نیکا رضازاده", "زینب رضوانی", "نرگس قاسمی", "مریم اصغری", "ناهید میری", "مرضیه کاظمی", "فاطمه حسینیان", "هانیه علوی", "حدیث محمدعلی رضایی", "معصومه محمدی", "سحر محمدیان", "فاطمه حقیقت", "سمانه بهمنی", "مریم شیرازی", "زهرا پورمحمد", "بهار عبداللهی", "لیلا محمدزاده");

$manUsers = [
    "fullName" => $maleNames[rand(0, 50)],
    "age" => rand(18, 90),
    "sex" => "m",
    "isSingle" => rand(0, 1)
];
$womanUsers = [
    "fullName" => $femaleNames[rand(0, 50)],
    "age" => rand(18, 90),
    "sex" => "f",
    "isSingle" => rand(0, 1)
];

$users = array($manUsers, $womanUsers);
$userData = $users[array_rand($users)];

echo "<br>" . $userData["fullName"] . "<br>";

#unsafe add user
$query = "INSERT INTO people (fullName,age,sex,isSingle) VALUES
 ('{$userData['fullName']}','{$userData['age']}','{$userData['sex']}','{$userData['isSingle']}')";
if ($mySqlI->query($query)) {
    echo "add user successfully" . PHP_EOL;
} else
    echo "add user unsuccessfully" . PHP_EOL;
var_dump($mySqlI);

#safe query


// $query2 = "INSERT INTO people (fullName, age , sex, isSingle) VALUES (?,?,?,?)";
// $stmt = $mySqlI->prepare($query2);
// $stmt->bind_param('sisi', $name, $age, $sex, $isSingle);
// if ($stmt->execute()) {
//     echo "add user successfully" . PHP_EOL;
// } else {
//     echo "add user unsuccessfully" . PHP_EOL;
//     echo "<pre>";
//     print_r($stmt);
//     echo "</pre>";
// }

// $stmt->close();
