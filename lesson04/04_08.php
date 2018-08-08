<?php

//Поменять местами минимальный и последний элементы массива

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');
$minElementIndex = indexesOfMinElement($arr)[0];
$lastElementIndex = numberOfElements($arr) - 1;
swap($arr[$minElementIndex], $arr[$lastElementIndex]);
outputArray($output, $arr);