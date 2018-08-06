<?php

$input = fopen ("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите n: ");
fscanf($input, "%d", $n);
$p = 1;
for ($i = 1; $i <= $n; $i++) {
    $p *= (1 + (1 / ($i * $i)));
}

fprintf($output, "Произведение %d первых сомножителей равно %.2f", $n, $p);