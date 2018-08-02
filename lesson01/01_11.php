<?php

define("zero", "0");
define("numberOfYearDay", "365");

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите номер дня в году от 1 до 365: ");
fscanf($input, "%d", $k);

if ($k > zero && $k <= numberOfYearDay) {
    $n = ($k - 1) % 7 + 1;
    fprintf($output, "Номер текущего дня недели - %d", $n);
} else {
    fprintf($output, "Введите корректный день года");
}
