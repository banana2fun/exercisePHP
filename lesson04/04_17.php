<?php

//Заменить все наибольшие элементы массива значением минимального элемента

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');
outputArray($output, changeElementsValue($arr, valueOfMaxElement($arr), valueOfMinElement($arr)));