<?php
/*
Допустим, пользователь вводит названия городов через пробел.
Вы их присваиваете переменной.
Переставьте названия так, чтобы названия были упорядочены по алфавиту.
*/

$userData = 'Санкт-Петербург Москва Ростов-на-Дону Астрахань';
echo 'Исходная строка: ' . $userData . '<br>';

function citiesSort($cities) {
	$citiesArray = explode(' ', $cities);
	sort($citiesArray);	
	return implode(' ', $citiesArray);
}


echo 'Итоговая строка: ' . citiesSort($userData);