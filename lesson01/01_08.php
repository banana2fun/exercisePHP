<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите целое трёхзначное число: ");
fscanf($input, "%d", $k);

if (abs($k) > 99 && abs($k) < 1000) {
    $k2 = $k;
    $s+=$k%10;
    $k/=10;
    $s+=$k%10;
    $k/=10;
    $s+=$k%10;
    fprintf($output, "Сумма цифр числа " . $k2 . " равна %d", $s);
}