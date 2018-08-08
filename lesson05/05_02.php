<?php

//В произвольной матрице A[N][M] поменять местами в каждой строке минимальный и максимальный элементы

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'rectangle');

outputMatrix($output, switcherMinMaxValueOnRows($arr));