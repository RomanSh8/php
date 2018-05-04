<?php

function conver($str, $reg) {
    if ($reg == "upp") {
        return strtoupper($str);
    } if ($reg == "low") {
        return strtolower($str);
    } if ($reg == "ucf") {
        return ucfirst(strtolower($str));
    }
}

var_dump (conver("hello", "ucf"));
