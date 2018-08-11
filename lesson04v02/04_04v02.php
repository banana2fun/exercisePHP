<?php

//Сформировать одномерный массив В из номеров положительных элементов массива А

declare(strict_types=1);

require "library/arraysFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$indicesOfPositive = [];
foreach ($arr as $key => $item) {
    if ($item > 0) {
        $indicesOfPositive[] = $key;
    }
}

outputArray($output, $indicesOfPositive);