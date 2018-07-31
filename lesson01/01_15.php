<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите координтаты первой вершины: ");
fscanf($input, "%d %d",$x1, $y1);
fwrite($output, "Введите координтаты второй вершины: ");
fscanf($input, "%d %d", $x2, $y2);
fwrite($output, "Введите координтаты третьей вершины: ");
fscanf($input, "%d %d", $x3, $y3);

$a = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
$b = sqrt(pow($x3 - $x2, 2) + pow($y3 - $y2, 2));
$c = sqrt(pow($x1 - $x3, 2) + pow($y1 - $y3, 2));
$p = ($a + $b + $c) * 0.5;
$s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));

fprintf($output, "Площадь треугольника равна %.2f", $s);