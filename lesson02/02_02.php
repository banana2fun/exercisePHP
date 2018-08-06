<?php

define("A", 10);

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите x: ");
fscanf($input, "%f", $x);

function f($x) {
    if (sqrt(A * $x) >= 0 && sqrt(cos($x * $x) / ($x * $x)) >= 0) {
        throw new Exception("Выражение под корнем меньше 0");
    }
    $z = sqrt(A * $x) / log($x) - sqrt(cos($x * $x) / ($x * $x));
    return $z;
}

try {
    fprintf($output, "Результат вычисления: %.3f", f($x));
} catch (Exception $e) {
    echo $e->getMessage();
}