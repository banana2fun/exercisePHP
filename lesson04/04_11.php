<?php

//Сформировать одномерный массив В , записав в него сначала элементы массива А большие 100, а потом - остальные

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');
$filtredArr = valuesMoreThat($arr, 100);
$remainingArr = differenseOfArrays($arr, $filtredArr);
var_dump($filtredArr);
var_dump($remainingArr);
outputArray($output, mergingArrays($filtredArr, $remainingArr));