<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите номер дня в году от 1 до 365: ");
fscanf($input, "%d", $k);

if ($k > 0 && $k < 366) {
    $n = fmod($k, 7);
    if ($n == 0) {
        $n = 7;
    }
    fprintf($output, "Номер текущего дня недели - %d", $n);
} else {
    fprintf($output, "Введите корректный день года");
}
