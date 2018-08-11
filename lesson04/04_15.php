<?php

//Сформировать одномерный массив В , записав в него сначала положительные элементы массива А, а потом - остальные

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$positive = positiveElements($arr);
$remain = differenceOfArrays($arr, $positive);

outputArray($output, contactArrays($positive, $remain));