<?php 

$weekDaysR = ["понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"];
$weekDaysE = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
$array = array_combine($weekDaysE, $weekDaysR);

$x = date("l");


foreach ($array as $key => $value) {
    if ($key == $x) {
    echo "<strong>$value</strong>";
    echo "</br>";
    } else {
    echo "$value";
    echo "</br>";
    }
    
}