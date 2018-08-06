<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите x: ");
fscanf($input, "%f", $x);

/**
 * @param $x
 * @return float
 * @throws Exception
 */
function f($x) {
    if (sqrt(sin($x) / $x) < 0) {
        throw new Exception("Выражение под корнем меньше 0");
    }
    $z = log(sin($x)) + sqrt(sin($x) / $x);
    return $z;
}

try {
    fprintf($output, "Результат вычисления: %.3f", f($x));
} catch (Exception $e) {
    echo $e->getMessage();
}
}
