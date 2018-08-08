<?php

//В квадратной матрице A[N][N] поменять местами максимальный элемент главной и побочной диагоналей с элементом, стоящим в первой строке и первом столбце

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

$main = elementsValueMainDiagonal($arr);
$collateral = elementsValueCollateralDiagonal($arr);
$arr[0][0] = valueOfMaxElement(mergingArrays($main, $collateral));

outputMatrix($output, $arr);