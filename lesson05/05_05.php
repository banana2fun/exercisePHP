<?php

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

$elements = positiveElements(elementsValueDownCollateralDiagonal($arr));
$numberOfElemens = numberOfElements($elements);

fprintf($output, "Количество положительных элементов, лежащих ниже побочной диагонали - %.2f", $numberOfElemens);
