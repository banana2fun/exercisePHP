<?php

//Кроме массива А, в этой задаче дан массив В. Сформировать массив Х, элементы которого равны частоте встречаемости элементов массива В среди элементов массива А

declare(strict_types=1);

require "inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr1 = createAndInputArray($output, $input, 'int');
$arr2 = createAndInputArray($output, $input, 'int');
$arr3 = frequencyOfOccurrence($arr1, $arr2);

foreach ($arr3 as $key => $value) {
    fprintf($output, "Частота встречаемости %.2f в массиве A равна %d \r\n", $value, $key);
}