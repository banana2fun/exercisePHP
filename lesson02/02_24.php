<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите значение x: ");
fscanf($input, "%f", $x);

function y($x) {
    if ($x <= 0)
        $y = -$x;
    if ($x > 0 && $x <= 1)
        $y = $x;
    if ($x > 1 && $x <= 3)
        $y = 1;
    if ($x > 3)
        $y = 4 - $x;
    return $y;
}

fprintf($output, "Значение y равно %.2f", y($x));