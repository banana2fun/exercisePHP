<?php

//Сформировать одномерный массив В , записав в него сначала элементы массива А большие 100, а потом - остальные

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/operationsFunction.php";

define("NUMERIC", 100);

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');


$sort = [];
foreach ($arr as $item) {
    if ($item > NUMERIC) {
        $sort[] = $item;
    }
}
foreach ($arr as $item) {
    if ($item <= NUMERIC) {
        $sort[] = $item;
    }
}

outputArray($output, $sort);