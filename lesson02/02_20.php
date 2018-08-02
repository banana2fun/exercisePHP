<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите три числа: ");
fscanf($input, "%f %f %f", $a, $b, $c);

$min = $a;
$max = $a;

function maxValue($number) {
    global $max;
    if ($number > $max) {
        $max = $number;
    }
    return $max;
}

function minValue($number) {
    global $min;
    if ($number < $min) {
        $min = $number;
    }
    return $min;
}

minValue($b);
minValue($c);
maxValue($b);
maxValue($c);

fprintf($output, "Минимальное число: %.2f. Максимальное число: %.2f", $min, $max);