<?php

//Вычислить математическое ожидание М и дисперсию D

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$expectedValue = arithmeticMeanOfElements($arr);
$dispersion = dispersion($arr);

fprintf($output, "Математическое ожидание равно %.2f. Дисперсия равна %.2f.", $expectedValue, $dispersion);