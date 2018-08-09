<?php

//Дана целочисленная матрица A[N][N]. Сформировать одномерный массив X[N] по следующему правилу: элементами одномерного массива с нечетными индексами будут элементы главной диагонали матрицы, а с четными – побочной диагонали

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

$main = elementsValueMainDiagonal($arr);
$collateral = elementsValueCollateralDiagonal($arr);
$arr2 = connectArraysThroughOneElement($main, $collateral, numberOfElements($arr));

outputArray($output, $arr2);