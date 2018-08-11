<?php

//Заменить все нулевые элементы, предшествующие первому отрицательному, единицей

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/operationsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

for ($i = 0; $i < numberOfElements($arr); $i++) {
    if ($arr[$i] < 0) {
        break;
    }
    if ($arr[$i] === 0) {
        $arr[$i] = 1;
    }
}

outputArray($output, $arr);