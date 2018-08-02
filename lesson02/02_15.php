<?php

define("numberOfHour", 12);
define("minuteInHour", 60);

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите текущее время ч м: ");
fscanf($input, "%d %d", $m, $n);

if ($m > 0 && $m <= numberOfHour && $n >= 0 && $n < minuteInHour) {
    $timeLeft = (numberOfHour - $m) * minuteInHour - $n;
    fprintf($output, "Осталось %d мин.", $timeLeft);
} else {
    fprintf($output, "Введите корректое время");
}

