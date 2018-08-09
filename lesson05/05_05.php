<?php

//В квадратной матрице A[N][N] определить среди элементов, расположенных ниже побочной диагонали, количество положительных элементов

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

$elements = positiveElements(elementsValueDownCollateralDiagonal($arr));
$numberOfElements = numberOfElements($elements);

fprintf($output, "Количество положительных элементов, лежащих ниже побочной диагонали - %.2f", $numberOfElements);