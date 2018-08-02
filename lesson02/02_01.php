<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите x: ");
fscanf($input, "%f", $x);

function f($x) {
    if (sqrt(sin($x) / $x) >= 0) {
        $z = log(sin($x)) + sqrt(sin($x) / $x);
        return $z;
    }
    return "Выражение под корнем меньше 0";
}

if (is_string(f($x))) {
    fprintf($output, "%s", f($x));
} else {
    fprintf($output, "Результат вычисления: %.3f", f($x));
}