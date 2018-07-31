<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Укажите угол поворота часовой стрелки в градусах: ");
fscanf($input, "%f", $f);

$h = floor($f / 30);
$m = fmod($f, 30) / 0.5;

fprintf($output, "Прошло %d ч. %d мин.", $h , $m);