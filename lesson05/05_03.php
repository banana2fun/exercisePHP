<?php

//В произвольной матрице A[N][N] заменить столбец, содержащий максимальный элемент, на число 100

declare(strict_types=1);

require "functionFile.php";

define("NUMBER", 100);

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, INT, SQUARE);

$indexMax = maxMatrixElementColumnIndex($arr);
for ($i = 0; $i < numberOfElements($arr); $i++) {
    $arr[$i][$indexMax] = NUMBER;
}

outputMatrix($output, $arr);