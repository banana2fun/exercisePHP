<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите объем первой воды, л: ");
fscanf($input, "%d",$v1);
fwrite($output, "Введите температуру первой воды, °C: ");
fscanf($input, "%d", $t1);
fwrite($output, "Введите объем второй воды, л: ");
fscanf($input, "%d",$v2);
fwrite($output, "Введите температуру второй воды, °C: ");
fscanf($input, "%d", $t2);

$totalVol = $v1 + $v2;
$finalTemp = ($t1 * $v1 + $t2 * $v2) / ($v1 + $v2);

fprintf($output, "Суммарный объем смеси %d л. Итоговая температура смеси %d °C.", $totalVol, $finalTemp);