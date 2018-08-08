<?php

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

fputs($output, 'Введите целое число:');
fscanf($input, "%d", $var1);
fprintf($output, 'Вы ввели целое число %d' . PHP_EOL, $var1);

fputs($output, 'Введите число с плавающей точкой:');
fscanf($input, "%f", $var2);
fprintf($output, 'Вы ввели число с плавающей точкой %.4f' . PHP_EOL, $var2);

fputs($output, 'Введите 2 слова:');
fscanf($input, "%s %s", $var3, $var4);
fprintf($output, "Слова \r\n\t %s %s \r\n", $var3, $var4);

fclose($input);
fclose($output);
