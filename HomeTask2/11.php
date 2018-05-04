<?php

$arr = ['<p>Some</p>', '<p>info</p>'];

for ($i = 0; $i < count ($arr); $i++) {
    $arr[$i] = strip_tags ($arr[$i]);
}

var_dump ($arr);

//
//$text = '<p>Параграф.</p><!-- Комментарий --> <a href="#fragment">Еще текст</a>';
//echo strip_tags($text);
//echo "\n";
//
//// Разрешаем <p> и <a>
//echo strip_tags($text, '<p><a>');
?>
