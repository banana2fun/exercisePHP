<?php

//Вычислить математическое ожидание М и дисперсию D

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/operationsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$expectedValue = sumOfElements($arr) / numberOfElements($arr);
$sum = 0;
foreach ($arr as $value) {
    $sum += pow(($value - $expectedValue), 2);
}
$dispersion = sqrt($sum / (numberOfElements($arr) - 1));

fprintf($output, "Математическое ожидание равно %.2f. Дисперсия равна %.2f.", $expectedValue, $dispersion);