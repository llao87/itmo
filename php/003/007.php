<?php
/*
Дана строка '/php/'.
Сделайте из нее строку 'php', удалив концевые слеши.
*/


$str = '/php/';

$str = str_replace('/','',$str);
echo $str;