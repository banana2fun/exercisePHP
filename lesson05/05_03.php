<?php

declare(strict_types=1);

require "functionFile.php";

define("NUMBER", 100);

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

$indexMax = maxMatrixElementIndex($arr);
for ($i = 0; $i < numberOfElements($arr); $i++) {
    $arr[$i][$indexMax] = NUMBER;
}

outputMatrix($output, $arr);