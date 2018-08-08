<?php

declare(strict_types=1);

require "functionFile.php";

define("NUMBER", 100);

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

for ($i = 0; $i < numberOfElements($arr); $i++) {
    for ($j = 0; $j < numberOfElements($arr[$i]); $j++) {
        if ($i === $j || $i + $j === numberOfElements($arr[$i]) - 1) {
            $arr[$i][$j] = NUMBER;
        }
    }
}

outputMatrix($output, $arr);