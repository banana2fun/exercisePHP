<?php

//Сформировать одномерный массив В из положительных элементов массива А

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/elementsFunction.php";
require "library/operationsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$maxValue = valueOfMaxElements($arr);
$positiveElements = arraySelection($arr, '>', 0);

outputArray($output, $positiveElements);