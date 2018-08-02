<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fwrite($output, "Введите координаты x и y: ");
fscanf($input, "%f %f", $x, $y);

//if ($x != 0 && $y != 0) {
//    if ($x > 0 && $y > 0)
//        fprintf($output, "Точка (%.2f, %.2f) лежит в первой четверти", $x, $y);
//    if ($x < 0 && $y > 0)
//        fprintf($output, "Точка (%.2f, %.2f) лежит во второй четверти", $x, $y);
//    if ($x < 0 && $y < 0)
//        fprintf($output, "Точка (%.2f, %.2f) лежит в третьей четверти", $x, $y);
//    if ($x > 0 && $y < 0)
//        fprintf($output, "Точка (%.2f, %.2f) лежит в четвёртой четверти", $x, $y);
//} else {
//    fprintf($output, "Укажите координату отличную от (%.2f, %.2f)", $x, $y);
//}

function quart($x, $y){
    if ($x != 0 && $y != 0) {
        if ($x > 0 && $y > 0)
            return "в первой четверти";
        if ($x < 0 && $y > 0)
            return "во второй четверти";
        if ($x < 0 && $y < 0)
            return "в третьей четверти";
        if ($x > 0 && $y < 0)
            return "в четвёртой четверти";
    }
    return "на оси координат";
}

fprintf($output, "Точка (%.2f, %.2f) лежит %s", $x, $y, quart($x, $y));