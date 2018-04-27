<?php

    $number = 185;
    $a1 = $number % 100;
    $a = ($number - $a1) / 100;
    $b1 = $a1 % 10;
    $b = ($a1 - $b1) /10;
    $c = $number - ($a * 100) - ($b * 10);


    echo $a + $b + $c;



