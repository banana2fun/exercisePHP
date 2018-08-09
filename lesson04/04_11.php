<?php

//Сформировать одномерный массив В , записав в него сначала элементы массива А большие 100, а потом - остальные

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$filteredArr = valuesMoreThat($arr, 100);
$remainingArr = differenceOfArrays($arr, $filteredArr);

outputArray($output, contactArrays($filteredArr, $remainingArr));