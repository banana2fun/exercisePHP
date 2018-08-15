<?php

//Дана матpица A[N,N]. Получить матрицу B[N][N] из матрицы A[N][N] путем перестановки столбцов – первого с последним, второго с предпоследним и т.д

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, INT, SQUARE);

outputMatrix($output, verticalFlip($arr));