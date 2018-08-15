<?php

//Сформировать одномерный массив X[N] из сумм положительных элементов строк матрицы

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, INT, SQUARE);

$positive = [];
for ($i = 0; $i < numberOfElements($arr); $i++) {
    $positive[$i] = sumOfElements(positiveElements($arr[$i]));
}

outputArray($output, $positive);