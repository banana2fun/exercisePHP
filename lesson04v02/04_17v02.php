<?php

//Заменить все наибольшие элементы массива значением минимального элемента

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/operationsFunction.php";
require "library/elementsFunction.php";
require "library/indicesFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$min = valueOfMinElements($arr);
$max = valueOfMaxElements($arr);
$indicesMax = indicesOfArrayElements($arr, $max);
for ($i = 0; $i < numberOfElements($indicesMax); $i++) {
    $arr = substituteOneElement($arr, $arr[$indicesMax[$i]], $min);
}

outputArray($output, $arr);