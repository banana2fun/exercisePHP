<?php

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

$positive = [];
for ($i = 0; $i < numberOfElements($arr); $i++) {
    $positive[$i] = sumOfElements(positiveElements($arr[$i]));
}

outputArray($output, $positive);