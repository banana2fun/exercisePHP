<?php

//Заменить минимальный элемент массива суммой положительных элементов массива

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$minValue = valueOfMinElement($arr);
$sumOfPositive = sumOfElements(positiveElements($arr));

outputArray($output, changeElementsValue($arr, $minValue, $sumOfPositive));