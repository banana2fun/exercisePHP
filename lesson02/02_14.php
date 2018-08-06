<?php

define("boardSize", 8);

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите положение фигуры в опасности: ");
fscanf($input, "%d %d", $k, $l);
if ($k <= BOARD_SIZE && $l <= BOARD_SIZE && $k > 0 & $l > 0) {
    fwrite($output, "Введите положение коня: ");
    fscanf($input, "%d %d", $m, $n);
    if ($m <= BOARD_SIZE && $n <= BOARD_SIZE && $m > 0 & $n > 0) {
        if (abs(($k + $l) - ($m + $n)) == 1 || abs(($k + $l) - ($m + $n)) == 3) {
            fprintf($output, "Присутствует угроза фигуре");
        } else {
            fprintf($output, "Угроза фигуре отсутствует");
        }
    } else {
        fprintf($output, "Укажите значение поля коня от 1 до 8");
    }
} else {
    fprintf($output, "Укажите значение поля в опасности от 1 до 8");
}
