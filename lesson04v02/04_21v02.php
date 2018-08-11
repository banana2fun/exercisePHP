<?php

//Определить количество чисел в наиболее длинной последовательности из подряд идущих нулей

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/elementsFunction.php";
require "library/operationsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$zeroRow = [];
$zero = 0;
for ($i = 0; $i < numberOfElements($arr); $i++) {
    if ($arr[$i] === 0 && $i !== numberOfElements($arr) - 1) {
        $zero++;
    } elseif ($arr[$i] === 0 && $i === numberOfElements($arr) - 1) {
        $zero++;
        $zeroRow[] = $zero;
    } else {
        $zeroRow[] = $zero;
        $zero = 0;
    }
}

fprintf($output, "Длиннейший ряд нулей равен %d", valueOfMaxElements($zeroRow));