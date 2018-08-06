<?php

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');
fwrite($output, "Введите делитель: ");
fscanf($input, "%d", $x);
$denominator = summValueDenominator($arr, $x);
outputArray($output, changeElementsValue($arr, 0, $denominator));