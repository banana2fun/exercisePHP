<?php

//Сформировать одномерный массив В из номеров положительных элементов массива А

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

outputArray($output, indexesOfPositiveElement($arr));