<?php

//Определить количество положительных элементов массива, предшествующих первому отрицательному

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');
$positiveElements = positiveElementsBeforeNegativ($arr);
$numberOfElements = numberOfElements($positiveElements);
fprintf($output, "Количество положительных элементов перед первым отрицательным равно %d: ", $numberOfElements);
