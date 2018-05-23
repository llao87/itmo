<?php

/*
  Создайте массив, заполненный буквами от 'a' до 'j'.
  Сделайте из него массив с заглавными буквами.
 */


$arr = range('a', 'j');

foreach ($arr as $key => $value) {
    $newArr[$key] = mb_strtoupper($arr[$key]);
}

print_r($newArr);
