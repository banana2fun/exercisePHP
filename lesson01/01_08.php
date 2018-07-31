<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите целое трёхзначное число: ");
fscanf($input, "%d", $k);

if (($k > 99 && $k < 1000) || ($k > -1000 && $k < -99)) {
    $arr = str_split($k);
    $s = array_sum($arr);
    fprintf($output, "Сумма цифр числа " . $k . " равна %d", $s);
}