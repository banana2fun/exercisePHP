<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Задайте целое положительное число больше 100: ");
fscanf($input, "%d", $k);

if ($k > 100) {
    $h = floor(($k % 1000) / 100) ;
    fprintf($output, "Третье число с конца: %d", $h);
} else {
    fprintf($output, "Ведите число меньше 100!");
}