<?php
/*
Создайте массив.
Объедините все элементы массива в строку и выведите её на экран.
*/


$tmpArr = ['Это','такой',' массив из','слов, которые надо','соединить в строку'];

$str = implode(' ', $tmpArr);

echo $str;