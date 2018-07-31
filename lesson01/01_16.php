<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите вещественное число x: ");
fscanf($input, "%f",$x);

$z16 = sin($x) / ($x * $x +1);
$y16 = log($x * $x +1);
fprintf($output, "Вариант 16: z = %f, y = %f \n\r", $z16, $y16);

$y17 = pow(sin($x), 2) + log(pow(($x * $x +1), 2));
fprintf($output, "Вариант 17: y = %f \n\r", $y17);

$y18 = log(sqrt($x * $x +4)) + 14.48 * pow(10, -5);
fprintf($output, "Вариант 18: y = %f \n\r", $y18);

$z19 = sqrt(pow($x, 4) + 2) - 0.024 * pow(10, 2);
fprintf($output, "Вариант 19: z = %f \n\r", $z19);

$y20 = sin($x) + pow($x * $x + 1, 5);
fprintf($output, "Вариант 20: y = %f \n\r", $y20);

$y21 = cos(2 * $x * $x + 5) + sqrt(2 * $x * $x + 5);
fprintf($output, "Вариант 21: y = %f \n\r", $y21);

$y22 = pow(cos($x), 2) + sqrt($x * $x + 1) + 1.15;
fprintf($output, "Вариант 22: y = %f \n\r", $y22);

$z23 = cos($x) / (pow(sin($x + 1), 2) + 5 * pow(10, -1)) - 0.0012;
fprintf($output, "Вариант 23: z = %f \n\r", $z23);

$z24 = cos(pow(pow($x, 4) + 2, 3)) + sqrt(pow($x, 4) + 2);
fprintf($output, "Вариант 24: z = %f \n\r", $z24);

$y25 = exp(-$x) + log(sqrt($x * $x + 4));
fprintf($output, "Вариант 25: y = %f \n\r", $y25);