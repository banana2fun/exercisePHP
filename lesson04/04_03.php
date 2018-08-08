<?php

//Заменить минимальный элемент массива суммой положительных элементов массива

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');
outputArray($output, changeElementsValue($arr, valueOfMinElement($arr), summOfElements(positiveElements($arr))));