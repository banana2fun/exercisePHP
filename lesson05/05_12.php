    <?php

//В квадратной матрице A[N][N] определить номер столбца матрицы, имеющего наибольшую сумму элементов

declare(strict_types=1);

require "functionFile.php";

$input = fopen("php://stdin", "r");
$output = fopen("php://stdout", "w");

$arr = createAndInputMatrix($output, $input, INT, SQUARE);

$columnTotals = sumOfColumnsElements($arr);
$maxColumn = indexesOfMaxElement($columnTotals);

fprintf($output, "Столбец с максимальной суммой элементов - %d", $maxColumn[0]);