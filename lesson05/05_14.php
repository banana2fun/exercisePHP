<?php

//Дана матpица A[N,N]. Определить, является ли заданная матрица симметричной (относительно главной диагонали)

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

fprintf($output, "%s", matrixCheckForSymmetry($arr));