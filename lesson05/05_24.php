<?php

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

$topElements = elementsValueTopCollateralDiagonal($arr);
$maxTopElement = valueOfMaxElement($topElements);

fprintf($output, "Наибольший элемент выше побочной диагонали равен - %.2f", $maxTopElement);