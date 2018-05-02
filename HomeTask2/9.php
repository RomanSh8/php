<?php

$array1 = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j"];
$array2 = range (1,10);

$array = array_combine ($array1, $array2);

print_r ($array);