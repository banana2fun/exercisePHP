<?php

//В квадратной матрице A[N][N] поменять местами максимальный элемент главной и побочной диагоналей с элементом, стоящим в первой строке и первом столбце

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, INT, SQUARE);

$indexOfMaxDiagonalElement = indexOfMaxDiagonalElement($arr);
swap($arr[0][0], $arr[$indexOfMaxDiagonalElement[0]][$indexOfMaxDiagonalElement[1]]);

outputMatrix($output, $arr);