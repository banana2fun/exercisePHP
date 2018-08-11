<?php

//Поменять местами минимальный и первый элементы массива

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/elementsFunction.php";
require "library/operationsFunction.php";
require "library/indicesFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$minValue = valueOfMinElements($arr);
$indexMin = indicesOfArrayElements($arr, $minValue);
swapElements($arr[0], $arr[$indexMin[0]]);

outputArray($output, $arr);