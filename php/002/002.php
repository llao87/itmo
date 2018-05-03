<?php

/*
  Нарисуйте треугольник (или ромб) из символов *.
  Высота треугольника равна 15.
 */



$height = 15;


// Для треугольника 
for ($i = 0; $i < $height; $i++) {
    for ($j = 1; $j < $height - $i; $j++) {
        echo '&nbsp;&nbsp;';
    }

    for ($j = $height - 2 * $i; $j <= $height; $j++) {
        echo '*';
    }
    echo '<br>';
}