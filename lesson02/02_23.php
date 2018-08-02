<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите значение x: ");
fscanf($input, "%f", $x);

function y($x) {
    if ($x >= 0) {
        $y = $x * $x;
    } else {
        $y = -$x;
    }
    return $y;
}

fprintf($output, "Значение y равно %.2f", y($x));


