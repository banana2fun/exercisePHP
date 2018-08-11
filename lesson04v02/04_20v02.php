<?php

//Определить порядковый номер того элемента массива, который наиболее близко к некоторому целому числу х (х, как и массив, вводится с клавиатуры)

declare(strict_types=1);

require "library/arraysFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');
fwrite($output, "Введите делитель: ");
fscanf($input, "%d", $x);

$element = $arr[0];
foreach ($arr as $item) {
    if (abs($item - $x) < abs($element - $x)) {
        $element = $item;
    }
}
$indexNumber = 1;
foreach ($arr as $item) {
    if ($item !== $element) {
        $indexNumber++;
    } else {
        break;
    }
}

fprintf($output, "Порядковый номер элемента ближайшего к %.2f равен %d", $x, $indexNumber);