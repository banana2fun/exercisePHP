<?php

define("NUMBER_OF_HOUR", 12);
define("MINUTE_IN_HOUR", 60);

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите текущее время ч м: ");
fscanf($input, "%d %d", $m, $n);

if (!($m > 0 && $m <= NUMBER_OF_HOUR && $n >= 0 && $n < MINUTE_IN_HOUR)) {
    throw new Exception("Введите корректое время");
} else {
    $timeLeft = (NUMBER_OF_HOUR - $m) * MINUTE_IN_HOUR - $n;
    fprintf($output, "Осталось %d мин.", $timeLeft);
}

