<?php

//Найти три наибольших элемента массива

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/operationsFunction.php";
require "library/elementsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$threeMax = [];
for ($i = 0; $i < 3; $i++) {
    $max = valueOfMaxElements($arr);
    $threeMax[] = $max;
    for ($j = 0; $j < numberOfElements($arr); $j++) {
        if ($arr[$j] === $max) {
            unset($arr[$j]);
            break;
        }
    }
}

outputArray($output, $threeMax);