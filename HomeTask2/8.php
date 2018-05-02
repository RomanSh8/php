<?php
$array = range (1,10);
$sum = 0;
print_r ($array);

$sum = array_sum($array);
echo "</br>";
echo "Сумма элементов - $sum" ;

$mult = array_product($array);
echo "</br>";
echo "Произведение элементов - $mult";

//В доработке

//$order = "1102837465";
//$arr1 = str_split($order);
//echo "</br>";
//print_r ($arr1);
//echo "</br>";
//
//asort($arr1);
//print_r ($arr1);
//echo "</br>";
//
//foreach ($arr1 as $key1 => $value1) {
////    $i = 0;
//    $key1 = $i++;
//    echo "$key1: $value1 </br>";
//}





//$array2 = array_combine ($arr1, $array);
//echo "</br>";
//print_r ($array2);

