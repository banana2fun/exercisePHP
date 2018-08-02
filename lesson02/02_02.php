<?php

define("a", 10);

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите x: ");
fscanf($input, "%f", $x);

function f($x) {
    if (sqrt(a * $x) >= 0 && sqrt(cos($x * $x) / ($x * $x)) >= 0) {
        $z = sqrt(a * $x) / log($x) - sqrt(cos($x * $x) / ($x * $x));
        return $z;
    }
    return "Выражение под корнем меньше 0";
}

if (is_string(f($x))) {
    fprintf($output, "%s", f($x));
} else {
    fprintf($output, "Результат вычисления: %.3f", f($x));
}