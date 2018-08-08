<?php

//Определить порядковый номер того элемента массива, который наиболее близко к некоторому целому числу х (х, как и массив, вводится с клавиатуры)

declare(strict_types=1);

require"inter.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputArray($output, $input, 'int');
var_dump($arr);
fwrite($output, "Введите число для поиска: ");
fscanf($input, "%d", $x);
$OrdinalNumber = searchOrdinalNumberOfNearestElement($arr, $x);
var_dump($arr);
fprintf($output, "Порядковый номер элемента ближайшего к %d равен %d", $x, $OrdinalNumber);
