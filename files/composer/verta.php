<?php
include_once "vendor/autoload.php";

use Hekmatinasser\Verta\Verta;

$datetime = verta();
// $datetime->timezone = 'Asia/Tehran';
// echo $datetime->timezone;
// echo $datetime->year;
// echo $datetime->month;
// echo $datetime->day;
echo $datetime->format('%B %d، %Y');
