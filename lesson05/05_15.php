<?php

//Дана матpица A[N,М]. Определить количество "особых" элементов матрицы, считая элемент "особым", если он больше суммы остальных элементов своего столбца

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, INT, RECTANGLE);

$sumColumn = sumOfColumnsElements($arr);
$count = 0;
for ($i = 0; $i < numberOfElements($arr); $i++) {
    for ($j = 0; $j < numberOfElements($arr[$i]); $j++) {
        if ($arr[$i][$j] > $sumColumn[$j] - $arr[$i][$j]) {
            $count++;
        }
    }
}

fprintf($output, "Количество особых элементов равно %d", $count);