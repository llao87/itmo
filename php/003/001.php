<?php
/*
Создать функцию с аргументом для вывода приветствия.
Установить значение по умолчанию для аргумента равное «Гость»
*/

function printGreetings($name="Гость") {
	echo "Здравствуйте, " . $name;
	return;
}


printGreetings();
echo '<br>';
printGreetings('Dmitry');