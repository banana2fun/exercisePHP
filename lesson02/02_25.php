<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите значения x и y: ");
fscanf($input, "%f %f", $x, $y);

function z($x, $y) {
    if ($y < 0) {
        $z = max($x, $y);
    } else {
        $z = min($x, $y);
    }
    return $z;
}

fprintf($output, "z равное %.2f", z($x, $y));