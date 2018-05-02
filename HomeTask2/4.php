<?php

$arr = [
    '1'=> ['price' => 10,'count' => 2],
    '2'=> ['price' => 5,'count' => 5],
    '3'=> ['price' => 8,'count' => 5],
    '4'=> ['price' => 12,'count' => 4],
    '5'=> ['price' => 8,'count' => 4],
];

foreach ($arr as $key => $row) {
    $price[$key]  = $row['price'];
    $count[$key] = $row['count'];
}

array_multisort($price, SORT_DESC, $count, SORT_DESC, $arr);
foreach ($arr as $key1 => $value1) {
    foreach($value1 as $key2 => $value2) {
        echo "$key2 = $value2";
        echo "<br>";
    }
}

