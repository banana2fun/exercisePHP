<?php

declare(strict_types=1);

require "inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr1 = createAndInputArray($output, $input, 'int');
$arr2 = createAndInputArray($output, $input, 'int');
$arr3 = frequencyOfOccurrence($arr1, $arr2);
foreach ($arr3 as $key => $value) {
    fprintf($output, "Частота втречаемости %.2f в массиве A равна %d \r\n", $value, $key);
}
