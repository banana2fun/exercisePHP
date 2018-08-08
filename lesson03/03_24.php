<?php

// Дано натуральное число n. Вычислить сумму n первых слагаемых

$input = fopen ("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите n: ");
fscanf($input, "%d", $n);

$p = 1;
for ($i = 2; $i <= $n; $i++) {
    $p += ($i -1) / $i;
}

fprintf($output, "Произведение %d первых сомножителей равно %f", $n, $p);