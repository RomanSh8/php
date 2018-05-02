<?php

    $array = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j"];
    print_r ($array);
    echo "</br>";
    $array_separated = implode("", $array);
    $arrayH = strtoupper($array_separated);
    $arr1 = str_split($arrayH);

    print_r ($arr1);
