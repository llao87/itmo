<?php

var_dump("dsadas");

$a = 'hello';
$$a = 'PHP';

// Переменные переменных
echo "$a ${$a} <br>";
echo "$a $hello <br>";

// Константа
define('CONSTANTA', 'SPB');
echo CONSTANTA . "<br>";

const CONST1 = 'MSK';
echo CONST1 . "<br>";

// PHP 5.6 const = scalar expression or Array type
// PHP 7 const array by "define"
// Получение значения константы
// 1 - обратиться к ней напрямую
// 2 -функция constant(<имя константы>)
// возвращает все определенные константы:
// var_dump(get_defined_constants());

var_dump(PHP_INT_SIZE);
var_dump(PHP_INT_MAX);
var_dump(PHP_INT_MIN);

is_integer(5 / 2);
is_float(5 / 2);

// Nan Infinity
// php7 Nan Infinity = integer = 0
echo "aksdjlaksjdlkajlkdjaklsjdkl {$a}sad<br>"; // чтобы $a выделить из строки
echo 'aksdjlaksjdlkajlkdjaklsjdkl {$a} sad<br>';



$a = `ifconfig`;
echo "<p>$a</p>";



//  оператор объединения PHP 7
//$b = NAN;
$A = $b ?? 'default';
echo $A;



// альтернативный синтаксис PHP elseif {}
// исползуется для html документов чтобы показать условие:
/*
  if (условие):
  какой-то код;
  elseif(условие2):
  какой-то код2;
  else:
  какой-то код3;
  endif;
 */

echo "<br><br><br>";
for ($i = 0; $i < 12; $i += 2) {
    echo $i;
}