<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите значение x: ");
fscanf($input, "%f", $x);

function y($x) {
    $y = ($x >= 0) ? $x * $x : -$x;
    return $y;
}

fprintf($output, "Значение y равно %.2f", y($x));


