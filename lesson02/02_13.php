<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите положение фигуры в опасности: ");
fscanf($input, "%d %d", $k, $l);
if ($k <= 8 && $l <= 8 && $k > 0 & $l > 0) {
    fwrite($output, "Введите положение ферзя: ");
    fscanf($input, "%d %d", $m, $n);
    if ($m <= 8 && $n <= 8 && $m > 0 & $n > 0) {
        if ($k === $m || $l === $n || ($k - $m) === ($l - $n)) {
            fprintf($output, "Присутствует угроза фигуре");
        } else {
            fprintf($output, "Угроза фигуре отсутствует");
        }
    } else {
        fprintf($output, "Укажите значение поля ферзя от 1 до 8");
    }
} else {
    fprintf($output, "Укажите значение поля в опасности от 1 до 8");
}
