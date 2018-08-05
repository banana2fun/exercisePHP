<?php

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');
$positive = positiveElements($arr);
$remain = differenseOfArrays($arr, $positive);
outputArray($output, mergingArrays($positive, $remain));