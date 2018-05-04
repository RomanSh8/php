<?php

$date = '30-11-2017';
$date2 = date_create_from_format('j-m-Y', $date);
echo date_format($date2, 'Y.m.d');
?>
