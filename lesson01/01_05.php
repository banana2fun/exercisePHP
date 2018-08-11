<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите координтаты первой вершины: ");
fscanf($input, "%d %d",$x1, $y1);
fwrite($output, "Введите координтаты второй вершины: ");
fscanf($input, "%d %d", $x2, $y2);
fwrite($output, "Введите координтаты третьей вершины: ");
fscanf($input, "%d %d", $x3, $y3);

$distance1to2 = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
$distance2to3 = sqrt(pow($x3 - $x2, 2) + pow($y3 - $y2, 2));
$distance3to1 = sqrt(pow($x1 - $x3, 2) + pow($y1 - $y3, 2));
$perimeter = $distance1to2 + $distance2to3 + $distance3to1;

fprintf($output, "Периметр треугольника равен: %d", $perimeter);