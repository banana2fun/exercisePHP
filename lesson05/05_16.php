<?php

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

$maxRow = indexesOfMaxElement(sumOfElementsRow($arr));

fprintf($output, "Строка с максимальной суммой элемнтов -  %d", $maxRow[0]);