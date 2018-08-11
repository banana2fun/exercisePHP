<?php

//Сформировать одномерный массив В так, что b[1]=a[1], b[2]=a[1]+a[2]

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/operationsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

outputArray($output, sequentialSum($arr));