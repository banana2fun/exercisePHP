<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите координаты x и y первой точки: ");
fscanf($input, "%f %f", $x1, $y1);
fwrite($output, "Введите координаты x и y второй точки: ");
fscanf($input, "%f %f", $x2, $y2);
fwrite($output, "Введите координаты x и y третьей точки: ");
fscanf($input, "%f %f", $x3, $y3);

if (($y2 - $y1) / ($x2 - $x1) === ($y3 - $y2) / ($x3 - $x2)) {
    fprintf($output, "Точки (%.2f, %.2f), (%.2f, %.2f), (%.2f, %.2f), лежат на одной прямой", $x1, $y1, $x2, $y2, $x3, $y3);
} else {
    fprintf($output, "Точки (%.2f, %.2f), (%.2f, %.2f), (%.2f, %.2f), не лежат на одной прямой", $x1, $y1, $x2, $y2, $x3, $y3);
}

