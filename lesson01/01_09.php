<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите время в формате час минута секунда: ");
fscanf($input, "%d %d %d", $h, $m, $s);

if ($h >= 0 && $h <= 11 && $m >= 0 && $m <= 59 && $s >= 0 && $s <= 59) {
    $f = ($h * 3600 + $m * 60 + $s) * (0.5 / 60);
    fprintf($output, "Отклонение стрелки от начала суток равно %.1f°", $f);
} else {
    fprintf($output, "Введен некорректный формат времени");
}
