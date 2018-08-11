<?php

//Определить количество положительных элементов массива, предшествующих первому отрицательному

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/operationsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$positive = [];
foreach ($arr as $item) {
    if ($item < 0) {
        break;
    }
    if ($item > 0) {
        $positive[] = $item;
    }
}
if (numberOfElements($positive) === 0) {
    throw new Exception('Положительных элементов не обнаружено');
}

fprintf($output, "Количество положительных элементов перед первым отрицательным равно %d", numberOfElements($positive));