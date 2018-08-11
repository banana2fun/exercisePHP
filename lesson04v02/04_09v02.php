<?php

//Сформировать одномерный массив В из элементов массива А таким образом, чтобы элементы массива А, имеющие одинаковые значения, вносились в массив В только один раз

declare(strict_types=1);

require "library/arraysFunction.php";
require "library/elementsFunction.php";
require "library/operationsFunction.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');

$unique = uniqueElements($arr);

outputArray($output, $unique);