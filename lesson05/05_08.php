<?php

//Сформировать одномерный массив B[M] из максимальных элементов столбцов прямоугольной матрицы A[N][M]

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'rectangle');

outputArray($output, valuesOfMaxElementColumns($arr));