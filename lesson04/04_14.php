<?php

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$summ = summOfElements(negativeElements($arr));
fprintf($output, "Сумма отрицателmных элеметов массива равна %.2f \r\n", $summ);
$op = multiplicationElementsValue(positiveElements($arr));
fprintf($output, "Произведение положительных элеметов массива равно %.2f\r\n", $op);
$count = numberOfElements(zeroElements($arr));
fprintf($output, "Количество нулевых элементов массива равно %d\r\n", $count);