<?php

/*
  Дан массив $fruits.
  Каждому вложенному массиву добавить count - количество элементов в массиве (элементы с одинаковым name)
  Удалить дублирующиеся элементы
 */

$fruits = [
    [
        "name" => "apple",
        "color" => "red",
    ],
    [
        "name" => "orange",
        "color" => "orange",
    ],
    [
        "name" => "lemon",
        "color" => "yellow",
    ],
    [
        "name" => "apple",
        "color" => "green",
    ],
    [
        "name" => "plum",
        "color" => "violet",
    ],
    [
        "name" => "plum",
        "color" => "violet",
    ],
    [
        "name" => "apple",
        "color" => "red",
    ],
    [
        "name" => "lemon",
        "color" => "yellow",
    ],
    [
        "name" => "banana",
        "color" => "yellow",
    ]
];

// Этот код просто для удобного сравнения
echo '<div style="width:50%; float:left;"><p>Исходный массив:</p><pre>';
print_r($fruits);
echo '</pre></div>';



for ($i = 0; $i < count($fruits); $i++) {
    $fruits[$i]['count'] = 1;

    // массив просматриваем с конца, чтобы не "съеъжали" индексы при удалении 
    // повторного элемента
    for ($j = count($fruits) - 1; $j > $i; $j--) {
        if ($fruits[$i]['name'] == $fruits[$j]['name']) {
            $fruits[$i]['count'] += 1;
            array_splice($fruits, $j, 1);
        }
    }
}


// Этот код просто для удобного сравнения
echo '<div style="width:50%; float:left;"><p>Измененный массив:</p><pre>';
print_r($fruits);
echo '</pre></div>';
