<?php

//В матрице A[N,N] найти наибольшее из значений элементов, расположенных выше побочной диагонали матрицы

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, INT, SQUARE);

$topElements = elementsValueTopCollateralDiagonal($arr);
$maxTopElement = valueOfMaxElement($topElements);

fprintf($output, "Наибольший элемент выше побочной диагонали равен - %.2f", $maxTopElement);