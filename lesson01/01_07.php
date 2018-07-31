<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите положительное вещественное число: ");
fscanf($input, "%f",$x);

$d = floor(fmod($x, 1) * 10);

fprintf($output, "Первая цифра дробной части - %d", $d);