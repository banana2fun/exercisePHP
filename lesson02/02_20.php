<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите три числа: ");
fscanf($input, "%f %f %f", $a, $b, $c);

$min = min($a, $b, $c);
$max = max($a, $b, $c);

fprintf($output, "Минимальное число: %.2f. Максимальное число: %.2f", $min, $max);