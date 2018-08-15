<?php

//В матрице A[N,N] найти наибольшее из значений элементов, расположенных выше главной диагонали матрицы

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, INT, SQUARE);

$topElements = elementsValueTopMainDiagonal($arr);
$maxTopElement = valueOfMaxElement($topElements);

fprintf($output, "Наибольший элемент выше главной диагонали равен - %.2f", $maxTopElement);