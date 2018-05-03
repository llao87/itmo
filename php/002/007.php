<?php

/*
  Создайте массив, заполненный буквами от 'a' до 'j'.
  Сделайте из него массив с заглавными буквами.
 */


$arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j'];

foreach ($arr as $key => $value) {
    $newArr[$key] = mb_strtoupper($arr[$key]);
}

var_dump($newArr);
