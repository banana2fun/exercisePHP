<?php

//Заменить максимальный элемент массива средним арифметическим положительных элементов массива.

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/elementsFunction.php";
require "library/operationsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$maxValue = valueOfMaxElements($arr);
$positiveElements = arraySelection($arr, '>', 0);
$meanPositiveElements = sumOfElements($positiveElements) / numberOfElements($positiveElements);
$arr = substituteOneElement($arr, $maxValue, $meanPositiveElements);

outputArray($output, $arr);