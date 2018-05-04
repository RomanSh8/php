<?php

function cities(...$arg) {
    asort($arg);
    return var_dump($arg);
}

cities("New-York", "Moscow", "St.Petersburg", "Berlin");

