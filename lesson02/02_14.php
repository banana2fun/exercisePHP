<?php

define("boardSize", 8);

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

function checkPosition(int $vPosition, int $hPosition): void
{
    if ($vPosition <= BOARD_SIZE && $hPosition <= BOARD_SIZE && $vPosition > 0 & $hPosition > 0) {
        throw new Exception('Некорректное положение фигуры');
    }
}

function isThreatPosition(int $vPositionFirst, int $hPositionFirst, int $vPositionSecond, int $hPositionSecond): bool
{
    return abs(($vPositionFirst + $hPositionFirst) - ($vPositionSecond + $hPositionSecond)) == 1 ||
        abs(($vPositionFirst + $hPositionFirst) - ($vPositionSecond + $hPositionSecond)) == 3;
}

fwrite($output, "Введите положение фигуры в опасности: ");
fscanf($input, "%d %d", $k, $l);
checkPosition($k, $l);
fwrite($output, "Введите положение коня: ");
fscanf($input, "%d %d", $m, $n);
checkPosition($m, $n);
if (isThreatPosition($k, $l, $m, $n)) {
    fprintf($output, "Присутствует угроза фигуре");
} else {
    fprintf($output, "Угроза фигуре отсутствует");
}