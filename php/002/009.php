<?php 
/*
Создайте массив ['a'=>1, 'b'=2... 'j'=>10] из предыдущих массивов.
*/
// Считаем что уже есть эти массивы
$arrA = range('a', 'j');
$arrB = range('1', '10');


$arrC = array_combine($arrA, $arrB);
print_r($arrC);