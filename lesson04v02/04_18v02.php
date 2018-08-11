<?php

//Кроме массива А, в этой задаче дан массив В. Сформировать массив Х, элементы которого равны частоте встречаемости элементов массива В среди элементов массива А

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/operationsFunction.php";
require "library/elementsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arrA = createAndInputArray($output, $input, 'int');
$arrB = createAndInputArray($output, $input, 'int');

$frequency = [];
foreach ($arrA as $key => $value) {
    $frequency[$value]++;
}
$arrB = uniqueElements($arrB);
$frequencyAB =[];
foreach ($arrB as $item) {
    foreach ($frequency as $key => $value) {
        if($key === $item) {
            $frequencyAB[$key] = $value;
        }
    }
}

foreach ($frequencyAB as $number => $frequencyInA) {
    fprintf($output, "Частота встречаемости %.2f в массиве А равна %d \r\n", $number, $frequencyInA);
}