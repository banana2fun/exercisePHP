<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите целое трёхзначное число: ");
fscanf($input, "%d", $k);

if (($k > 99 && $k < 1000) || ($k > -1000 && $k < -99)) {
    $firstNumber = (int)($k / 100);
    $secondNumber = (int)(($k - $firstNumber * 100) / 10);
    $thrirdNumber = ($k - $firstNumber * 100 - $secondNumber * 10);
    $s = $firstNumber + $secondNumber + $thrirdNumber;
    fprintf($output, "Сумма цифр числа " . $k . " равна %d", $s);
}