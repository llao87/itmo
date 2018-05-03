<?php

/*
  Отсортировать массив по 'price'
  $arr = [
  '1'=> [
  'price' => 10,
  'count' => 2
  ],
  '2'=> [
  'price' => 5,
  'count' => 5
  ],
  '3'=> [
  'price' => 8,
  'count' => 5
  ],
  '4'=> [
  'price' => 12,
  'count' => 4
  ],
  '5'=> [
  'price' => 8,
  'count' => 4
  ],
  ];
 */

$arr = [
    '1' => [
        'price' => 10,
        'count' => 2
    ],
    '2' => [
        'price' => 5,
        'count' => 5
    ],
    '3' => [
        'price' => 8,
        'count' => 5
    ],
    '4' => [
        'price' => 12,
        'count' => 4
    ],
    '5' => [
        'price' => 8,
        'count' => 4
    ],
];

// Этот код просто для удобного сравнения
echo '<div style="width:50%; float:left;"><p>Исходный массив:</p><pre>';
print_r($arr);
echo '</pre></div>';

// Строки сортировки
foreach ($arr as $key => $value)
    $prices[] = $value['price'];
array_multisort($prices, SORT_ASC, $arr);

// Этот код просто для удобного сравнения
echo '<div style="width:50%; float:left;"><p>Сортированный массив:</p><pre>';
print_r($arr);
echo '</pre></div>';
