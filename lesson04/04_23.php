<?php

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arrX = createAndInputArray($output, $input, 'int');
$arrY = createAndInputArray($output, $input, 'int');

fprintf($output, "Минимальный радуис сферы равен %.2f", searchRadius($arrX, $arrY));