<?php

//В произвольной матрице A[N][M] заменить строку, содержащую минимальный элемент матрицы нулями

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, INT, RECTANGLE);

$minRow = minMatrixElementIndexRow($arr);
for ($j = 0; $j < numberOfElements($arr[0]); $j++) {
    $arr[$minRow][$j] = 0;
}

outputMatrix($output, $arr);