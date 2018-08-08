<?php

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'rectangle');

$zeroInRows = zeroInRow($arr);
$maxZeroRow = indexesOfMaxElement($zeroInRows);

fprintf($output, "Строка с наибольшим количеством нулей - %d", $maxZeroRow[0]);