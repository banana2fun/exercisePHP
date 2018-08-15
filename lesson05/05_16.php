<?php

//В квадратной матрице A[N][N] определить номер строки матрицы, имеющей наибольшую сумму элементов

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, INT, SQUARE);

$maxRow = indexesOfMaxElement(sumOfElementsRow($arr));

fprintf($output, "Строка с максимальной суммой элемнтов -  %d", $maxRow[0]);