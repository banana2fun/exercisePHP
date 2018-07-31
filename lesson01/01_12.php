<?php
$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Укажите сопротивления трёх резисторов: ");
fscanf($input, "%d %d %d",$R1, $R2, $R3);

$totalR = $R1 * $R2 * $R3 / ($R1 * $R2 + $R2 * $R3 + $R3 * $R1);

fprintf($output, "Общее сопротивление при параллельном соединении равно %.2f", $totalR);