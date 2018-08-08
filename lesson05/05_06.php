<?php

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, 'int', 'square');

$Main = elementsValueMainDiagonal($arr);
$Collateral = elementsValueCollateralDiagonal($arr);
$arr2 = mergingArraysThroughOneElement($Main, $Collateral, numberOfElements($arr));

outputArray($output, $arr2);