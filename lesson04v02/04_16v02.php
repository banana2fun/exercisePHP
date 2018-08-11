<?php

//Cформировать одномерный массив В, записав в него сначала элементы массива А, имеющие четные индексы, потом  элементы с нечетными индексами

declare(strict_types=1);

require "library/arraysFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$sort = [];
foreach ($arr as $key => $item) {
    if ($key % 2 === 0) {
        $sort[] = $item;
    }
}
foreach ($arr as $key => $item) {
    if ($key % 2 !== 0) {
        $sort[] = $item;
    }
}

outputArray($output, $sort);