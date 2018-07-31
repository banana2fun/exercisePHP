<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Укажите скорости двух объектов в м/с: ");
fscanf($input, "%d %f",$speed1, $speed2);
fwrite($output, "Укажите начальное расстояние между объектами в метрах: ");
fscanf($input, "%f", $distance);

$time = ($speed1 + $speed2) / $distance;

fprintf($output, "Объекты встретятся через %d сек.", $time);