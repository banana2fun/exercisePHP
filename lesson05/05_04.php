<?php

//В квадратной матрице A[N][N] найти среди элементов, расположенных ниже главной диагонали, минимальный элемент

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

$minValue = valueOfMinElement(elementsValueDownMainDiagonal($arr));

fprintf($output, "Минимальный элемент, лежащий ниже главной диагонали равен %.2f", $minValue);