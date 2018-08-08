<?php

define("gravityConst", "6.67E-11");

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите массы первого и второго тел в килограмах: ");
fscanf($input, "%f %f", $m1, $m2);
fwrite($output, "Введите расстояниt между объектами в метрах: ");
fscanf($input, "%f", $r);

$f = gravityConst * $m1 * $m2 / pow($r, 2);

fprintf($output, "Сила притяжения между телами с массами %.3f кг. и %.3f кг, находящимся на расстоянии друг от друга %.3f м, равна %.3e Н.", $m1, $m2, $r, $f);