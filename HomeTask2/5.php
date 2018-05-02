<?php


$fruits = [
    ["name"=> "apple","color"=> "red",],
    ["name"=> "orange","color"=> "orange",],
    ["name"=> "lemon","color"=> "yellow",],
    ["name"=> "apple","color"=> "green",],
    ["name"=> "plum","color"=> "violet",],
    ["name"=> "plum","color"=> "violet",],
    ["name"=> "apple","color"=> "red",],
    ["name"=> "lemon","color"=> "yellow",],
    ["name"=> "banana","color"=> "yellow",]
];
$x = count ($fruits);

for ($i = 0; $i < $x; $i++) {
    $fruits[$i][count] = count($fruits[$i]);
}

foreach ($fruits as $key => $row) {
    $name[$key] = $row["name"];
    $color[$key] = $row["color"];
}

array_multisort($name, SORT_DESC, $color, SORT_DESC, $fruits);
foreach ($fruits as $key1 => $value1) {
    foreach($value1 as $key2 => $value2) {
        echo "$key2 = $value2";
        echo "<br>";
    }
}

for ($j = 0; $j < $x; $j++) {
    if ($fruits[$j]["name"] == $fruits[$j-1]["name"]) {
        array_splice($fruits[$j],0);
//        echo fruits[$j];
    }
}

print_r ($fruits);