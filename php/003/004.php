<?php
/*
Используя функцию удаления HTML и PHP-тегов из строки,
выведите на экран строку «<h1>Hello, world!</h1>».
Строка не должна выглядеть как заголовок первого уровня – 
все теги должны быть удалены.
*/


$str = '<h1>Hello, world!</h1>';


echo strip_tags($str);