<?php

//Cформировать одномерный массив В, записав в него сначала элементы массива А, имеющие четные индексы, потом  элементы с нечетными индексами

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$even = elementsValueOfEvenIndexes($arr);
$odd = elementsValueOfOddIndexes($arr);

outputArray($output, contactArrays($even, $odd));