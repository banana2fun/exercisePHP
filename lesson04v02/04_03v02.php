<?php

//Заменить минимальный элемент массива суммой положительных элементов массива

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/elementsFunction.php";
require "library/operationsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$minValue = valueOfMinElements($arr);
$positiveElements = arraySelection($arr, '>', 0);
$sumOfPositive = sumOfElements($positiveElements) ;
$arr = substituteOneElement($arr, $minValue, $sumOfPositive);

outputArray($output, $arr);