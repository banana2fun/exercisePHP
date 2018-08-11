<?php

//Вычислить сумму отрицательных, произведение положительных и количество нулевых элементов массива с нечетными индексами

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$sum = sumOfElements(negativeElements($arr));
$op = multiplicationElementsValue(positiveElements($arr));
$count = numberOfElements(zeroElements($arr));

fprintf($output, "Сумма отрицательных элеметов массива равна %.2f \r\n", $sum);
fprintf($output, "Произведение положительных элеметов массива равно %.2f\r\n", $op);
fprintf($output, "Количество нулевых элементов массива равно %d\r\n", $count);