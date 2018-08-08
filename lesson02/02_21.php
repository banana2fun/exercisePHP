<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите координаты x и y: ");
fscanf($input, "%f %f", $x, $y);

function quart($x, $y)
{
    if ($x !== 0 && $y !== 0) {
        if ($x > 0 && $y > 0)
            return "в первой четверти";
        if ($x < 0 && $y > 0)
            return "во второй четверти";
        if ($x < 0 && $y < 0)
            return "в третьей четверти";
        if ($x > 0 && $y < 0)
            return "в четвёртой четверти";
    }
    throw new Exception("Точка лежит на оси координат");
}

try {
    fprintf($output, "Точка (%.2f, %.2f) лежит %s", $x, $y, quart($x, $y));
} catch (Exception $e) {
    echo $e->getMessage();
}
