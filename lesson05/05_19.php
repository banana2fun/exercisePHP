<?php

//Дана матpица A[N,М]. Упорядочить строки матрицы в порядке не убывания их первых элементов

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, INT, RECTANGLE);

outputMatrix($output, sortRowByColumnNondecreasing($arr));