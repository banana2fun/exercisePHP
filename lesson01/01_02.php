<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите значение x: ");
fscanf($input, "%d", $x);
fwrite($output, "Введите значение y: ");
fscanf($input, "%d", $y);

if ($x >= 1000 || $y >= 1000) {
    fprintf($output, "Введите числа меньше 1000");
} else {
    $x^=$y^=$x^=$y;
    fprintf($output, "Число x равно %d. Число y равно %d", $x, $y);
}