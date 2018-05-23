<?php
/*
Дан массив с элементами ['<p>Some</p>', '<p>info</p>']. 
Создайте новый массив, в котором из элементов будут удалены теги.
*/


$arr = ['<p>Some</p>', '<p>info</p>'];


foreach ($arr as $value) {
	$newArr[] = strip_tags($value);
}


print_r($newArr);