<?php

//Определить количество чисел в наиболее длинной последовательности из подряд идущих нулей

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');
fprintf($output, "Длиннейший ряд нулей равен %d", zeroLongestRow($arr));