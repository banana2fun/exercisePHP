<?php

//Дана матpица A[N,М]. Определить количество элементов матрицы, являющихся простыми числами

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, INT, RECTANGLE);

fprintf($output, "Количество простых чисел в матрице равно - %d", simpleNumberOnMatrix($arr));