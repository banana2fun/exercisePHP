<?php

//Поменять местами минимальный и первый элементы массива

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');
$minElementIndex = indexesOfMinElement($arr)[0];
swap($arr[$minElementIndex], $arr[0]);
outputArray($output, $arr);