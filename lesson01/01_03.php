<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите время в секундах: ");
fscanf($input, "%d", $k);

$h = floor($k / 3600);
$m = floor(fmod($k, 3600) / 60);

fprintf($output, "Количество полных часов %d, минут %d.", $h, $m);