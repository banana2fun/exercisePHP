<?php

//Определить количество чисел в наиболее длинной последовательности из подряд идущих нулей

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');
$countMax = countOfMaxElementsValue($arr);
fprintf($output, "Количество элементов массива с максимальным значением равно %d", $countMax);