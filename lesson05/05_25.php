<?php

declare(strict_types=1);

require "functionFile.php";

define("NUMBER", 100);

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

$maxRow = indexesOfMinElement(sumOfElementsRow($arr));
for ($j = 0; $j < numberOfElements($arr[0]); $j++) {
    $arr[$maxRow[0]][$j] = NUMBER;
}

outputMatrix($output, $arr);