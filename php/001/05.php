<?php

/* 
    В переменной n хранится вещественное число с ненулевой дробной частью.
    Необходимо округлить число n до ближайшего целого и вывести результат на экран
 */


$n = 12.432348;

$nRound = round($n, 0, PHP_ROUND_HALF_UP);

echo $nRound;