<?php

//Дана матpица A[N,N]. Определить, является ли заданная матрица симметричной (относительно главной диагонали)

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, INT, SQUARE);

if (!(matrixCheckForSymmetry($arr))) {
    throw new Exception('Матрица не симметрична');
} else {
    fprintf($output, "Матрица симметрична");
}
