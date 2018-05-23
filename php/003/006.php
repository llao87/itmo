<?php
/*
В переменной $date лежит дата в формате '30-11-2017'.
Преобразуйте эту дату в формат '2017.11.30'.
*/


$date = date_create('30-11-2017');

echo 'ORIGINAL DATE : 30-11-2017 <br><br><br>';

echo 'Formatted date : ' . date_format($date, 'Y.m.d');