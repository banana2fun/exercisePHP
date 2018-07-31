<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите координату x первой точки: ");
fscanf($input, "%f", $x1);
fwrite($output, "Введите координату y первой точки: ");
fscanf($input, "%f", $y1);
fwrite($output, "Введите координату x второй точки: ");
fscanf($input, "%f", $x2);
fwrite($output, "Введите координату y второй точки: ");
fscanf($input, "%f", $y2);

$distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

fprintf($output, "Расстояние между точками равно %.3f" . PHP_EOL, $distance);