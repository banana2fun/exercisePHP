<?php

//Дана матpица A[N,М]. Упорядочить элементы каждой строки в порядке неубывания

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'rectangle');

outputMatrix($output, sortRowNondecreasing($arr));