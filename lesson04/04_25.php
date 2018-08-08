<?php

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');
$max1 = valueOfMaxElement($arr);
$arr = deleteElements($arr, $max1);
$max2 = valueOfMaxElement($arr);
$arr = deleteElements($arr, $max2);
$max3 = valueOfMaxElement($arr);
fprintf($output, "Три максимальных элемента: %.2f, %.2f, %.2f.", $max1, $max2, $max3);