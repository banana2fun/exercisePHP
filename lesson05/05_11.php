<?php

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

$main = elementsValueMainDiagonal($arr);
$collateral = elementsValueCollateralDiagonal($arr);
$arr[0][0] = valueOfMaxElement(mergingArrays($main, $collateral));

outputMatrix($output, $arr);