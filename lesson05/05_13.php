<?php

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

$main = elementsValueMainDiagonal($arr);
$collateral = elementsValueCollateralDiagonal($arr);

outputArray($output, halfSumDiagonal($main, $collateral));