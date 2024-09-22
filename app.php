<?php

require_once("./devices/TV.php");
require_once("./educ/Student.php");

use devices\TV as TV;
use educ\Student as Student;

$tvSamsung = new TV(32, "32VNC", "Samsung");
$tvSony = new TV(65, "65TC", "Sony");

$studentMe = new Student("Игорь Кириллов", 37);
$studentMyFriend = new Student("Вася Иванов", 22);

logTVInfo($tvSamsung);
logTVInfo($tvSony);

function logTVInfo(TV $tv): void
{
    $name = $tv->getBrand() . " " . $tv->getModel();
    $d = $tv->getDiagonal();
    if ($d <= TV::TV_DIAGONAL_SMALL) {
        echo "$name is small" . "\n";
    } else if ($d <= TV::TV_DIAGONAL_MEDIUM) {
        echo "$name is medium" . "\n";
    } else if ($d <= TV::TV_DIAGONAL_BIG) {
        echo "$name is big" . "\n";
    } else {
        echo "$name is super big" . "\n";
    }
}