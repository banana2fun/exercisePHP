<?php

//Заменить максимальный элемент массива средним арифметическим положительных элементов массива.

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$maxValue = valueOfMaxElement($arr);
$meanOfPositive = arithmeticMeanOfElements(positiveElements($arr));

outputArray($output, changeElementsValue($arr, $maxValue, $meanOfPositive));