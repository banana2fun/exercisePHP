<?php

//Дана матpица A[N,N]. Транспонировать матрицу

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

outputMatrix($output, transpose($arr));
