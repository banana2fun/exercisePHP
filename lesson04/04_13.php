<?php

//Заменить все нулевые элементы, предшествующие первому отрицательному, единицей

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

outputArray($output, swapZeroElementsBeforeNegativeToOne($arr));