<?php

//Заменить нулевые элементы массива суммой элементов, значения которых кратны некоторому целому значению x (х, как и массив, вводится с клавиатуры)

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/operationsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');
fwrite($output, "Введите делитель: ");
fscanf($input, "%d", $x);

$multiplesOfX = [];
for ($i = 0; $i < numberOfElements($arr); $i++) {
    if ($arr[$i] % $x === 0) {
        $multiplesOfX[] = $arr[$i];
    }
}
$sum = sumOfElements($multiplesOfX);
for ($i = 0; $i < numberOfElements($arr); $i++) {
    if ($arr[$i] === 0) {
        $arr = substituteOneElement($arr, $arr[$i], $sum);
    }
}

outputArray($output, $arr);