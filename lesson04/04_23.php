<?php

//Кроме массива А, в этой задаче дан одномерный массив В. Рассматривая пары чисел ai и bi как координаты точек на плоскости,определить радиус наименьшего круга (с центром в начале координат), внутрь которого попадают все эти точки

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arrX = createAndInputArray($output, $input, 'int');
$arrY = createAndInputArray($output, $input, 'int');

fprintf($output, "Минимальный радуис сферы равен %.2f", searchRadius($arrX, $arrY));