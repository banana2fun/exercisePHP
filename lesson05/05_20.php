<?php

//Дана матpица A[N,М]. Определить, в какой строке матрицы находится наибольшее количество нулей

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, INT, RECTANGLE);

$zeroInRows = rowLargestNumberZeros($arr);
$maxZeroRow = indexesOfMaxElement($zeroInRows);

fprintf($output, "Строка с наибольшим количеством нулей - %d", $maxZeroRow[0]);