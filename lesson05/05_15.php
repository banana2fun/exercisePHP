<?php

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'rectangle');

$sumCollumn = sumOfElementsCollumn($arr);
$count = 0;
for ($i = 0; $i < numberOfElements($arr); $i++) {
    for ($j = 0; $j < numberOfElements($arr[$i]); $j++) {
    if ($arr[$i][$j] > $sumCollumn[$j] - $arr[$i][$j] ) {
        $count++;
    }
    }
}

fprintf($output, "Количество особых элементов равно %d", $count);