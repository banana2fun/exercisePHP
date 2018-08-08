<?php

//Сформировать одномерный массив В из элементов массива А таким образом, чтобы элементы массива А, имеющие одинаковые значения, вносились в массив В только один раз

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');
outputArray($output, uniqleElementsValue($arr));
