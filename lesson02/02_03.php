<?php

define("A", 0.25);

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите x: ");
fscanf($input, "%f", $x);

function f($x)
{
    if (sqrt($x / cos(A * $x)) >= 0) {
        $z = exp((A / $x)) + sqrt($x / cos(A * $x));
        return $z;
    }
    throw new Exception("Выражение под корнем меньше 0");
}

try {
    fprintf($output, "Результат вычисления: %.3f", f($x));
} catch (Exception $e) {
    echo $e->getMessage();
}