<?php

//Сформировать одномерный массив В , записав в него сначала положительные элементы массива А, а потом - остальные

declare(strict_types=1);

require "library/arraysFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$sort = [];
foreach ($arr as $item) {
    if ($item > 0) {
        $sort[] = $item;
    }
}
foreach ($arr as $item) {
    if ($item <= 0) {
        $sort[] = $item;
    }
}

outputArray($output, $sort);