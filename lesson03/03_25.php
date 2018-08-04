<?php

$input = fopen ("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите k: ");
fscanf($input, "%d", $k);

$p = 0;
for ($i = 1; $i <= $k; $i++) {
    $p += $i + 1 / (5 * $i + sin($i));
}

fprintf($output, "Произведение %d первых сомножителей равно %f", $n, $p);