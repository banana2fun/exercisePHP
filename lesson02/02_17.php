<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите координаты x и y: ");
fscanf($input, "%f %f", $x1, $y1);

function y($x)
{
    $y = 4 * $x - 3;
    return $y;
}

if (y($x1) === $y1) {
    fprintf($output, "Точка (%.2f, %.2f) лежит на прямой y=4x-3", $x1, $y1);
}
if (y($x1) > $y1) {
    fprintf($output, "Точка (%.2f, %.2f) лежит ниже прямой y=4x-3", $x1, $y1);
}
if (y($x1) < $y1) {
    fprintf($output, "Точка (%.2f, %.2f) лежит выше прямой y=4x-3", $x1, $y1);
}