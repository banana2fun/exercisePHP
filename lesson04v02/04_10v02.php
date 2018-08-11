<?php

// Сформировать одномерный массив В так, что b[1] = сумм(от 1 до n)a, b[2] = сумм(от 1 до n-1)a, ...b[n]=a[1]

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/operationsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$sum = sequentialSum($arr);
$reverseSum = [];
for ($i = 0; $i < numberOfElements($sum); $i++) {
    $reverseSum[$i] = $sum[numberOfElements($sum) - 1 - $i];
}

outputArray($output, $reverseSum);