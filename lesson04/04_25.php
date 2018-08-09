<?php

//Найти три наибольших элемента массива

declare(strict_types=1);

require "inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

if (numberOfElements($arr) < 3) {
    throw new Exception("Число элементов массива меньше трёх");
} else {
    $indexOfMax = getMinElementIndex($arr, 3);
}

outputArray($output, $indexOfMax);