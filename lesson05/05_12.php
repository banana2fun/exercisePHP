<?php

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

$sumColumn = sumOfElementsCollumn($arr);
$maxColumn = indexesOfMaxElement($sumColumn);

fprintf($output, "Столбец с максимальной суммой элементов - %d", $maxColumn[0]);