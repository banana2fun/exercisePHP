<?php

//Определить, сколько элементов массива принимает наибольшее значение

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/elementsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$max = valueOfMaxElements($arr);
$maxNumber = 0;
foreach ($arr as $item) {
    if ($item === $max) {
        $maxNumber++;
    }
}

fprintf($output, "Количество элементов массива с максимальным значением равно %d", $maxNumber);