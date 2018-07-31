<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите массы первого и второго тел в килограмах: ");
fscanf($input, "%f %f", $m1, $m2);
fwrite($output, "Введите расстояниt между объектами в метрах: ");
fscanf($input, "%f", $r);

$f = 6.67 * pow(10, -11) * $m1 * $m2 / pow($r, 2);

fprintf($output, "Сила притяжения между телами с массами %f кг. и %f кг, находящимся на расстоянии друг от друга %f м, равна %e Н.", $m1, $m2, $r, $f);