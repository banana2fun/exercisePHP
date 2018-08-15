<?php

//В произвольной матрице A[N][M] поменять местами в каждой строке минимальный и максимальный элементы

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, INT, RECTANGLE);

function switcherMinMaxValueOnRows(array $arr): array
{
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        $min = indexesOfMinElement($arr[$i]);
        $max = indexesOfMaxElement($arr[$i]);
        swap($arr[$i][$min[0]], $arr[$i][$max[0]]);
    }
    return $arr;
}

outputMatrix($output, switcherMinMaxValueOnRows($arr));