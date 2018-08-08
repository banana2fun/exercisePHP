<?php

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'rectangle');

fprintf($output, "Количество простых чисел в матрице равно - %d", simpleNumberOnMatrix($arr));