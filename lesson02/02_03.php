<?php

define("a", "0.25");

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите x: ");
fscanf($input, "%f", $x);

function f($x) {
    if (sqrt($x / cos(a * $x)) >= 0) {
        $z = exp((a / $x)) + sqrt($x / cos(a * $x));
        return $z;
    } else {
        return "Выражение под корнем меньше 0";
    }
}

if (is_string(f($x))) {
    fprintf($output, "%s", f($x));
} else {
    fprintf($output, "Результат вычисления: %.3f", f($x));
}