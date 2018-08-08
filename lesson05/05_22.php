<?php

//Дана матpица A[N,М]. Заменить элементы матрицы, являющиеся простыми числами, нулем

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'rectangle');

outputMatrix($output, simpleNumberOnMatrixToZero($arr));