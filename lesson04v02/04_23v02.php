<?php

//Кроме массива А, в этой задаче дан одномерный массив В. Рассматривая пары чисел ai и bi как координаты точек на плоскости,определить радиус наименьшего круга (с центром в начале координат), внутрь которого попадают все эти точки

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/operationsFunction.php";
require "library/elementsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arrA = createAndInputArray($output, $input, 'int');
$arrB = createAndInputArray($output, $input, 'int');

if (numberOfElements($arrA) !== numberOfElements($arrB)) {
    throw new Exception('Массивы разной длины');
}

$radius = [];
for ($i = 0; $i < numberOfElements($arrA); $i++) {
    $radius[] = pow($arrA[$i], 2) + pow($arrB[$i], 2);
}
$minSearchRadius = sqrt(valueOfMaxElements($radius));

fprintf($output, "Минимальный радуис сферы равен %.2f", $minSearchRadius);