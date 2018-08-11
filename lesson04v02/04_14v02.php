<?php

//Вычислить сумму отрицательных, произведение положительных и количество нулевых элементов массива с нечетными индексами

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/operationsFunction.php";
require "library/elementsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$negative = arraySelection($arr, '<', 0);
$sumNegative = sumOfElements($negative);
$positive = arraySelection($arr, '>', 0);
$multi = 1;
foreach ($positive as $item) {
    $multi *= $item;
}
$zero = arraySelection($arr, '===', 0);
$zeroNumber = numberOfElements($zero);

fprintf($output, "Сумма отрицательных элеметов массива равна %.2f \r\n", $sumNegative);
fprintf($output, "Произведение положительных элеметов массива равно %.2f\r\n", $multi);
fprintf($output, "Количество нулевых элементов массива равно %d\r\n", $zeroNumber);