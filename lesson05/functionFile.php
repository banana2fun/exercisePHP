<?php

function validateArray(array $arr, int $filterFormat): void
{
    foreach ($arr as $item) {
        if (filter_var($item, $filterFormat) === false) {
            throw new Exception('Invalid array element');
        }
    }
}

define("INT", 'int');
define("FLOAT", 'float');
define("SQUARE", 'square');
define("RECTANGLE", 'rectangle');
function createAndInputMatrix($fileOutput, $fileInput, string $elementsType, string $matrixForm): array
{
    $matrix = [];
    fwrite($fileOutput, "Введите количество элементов матрицы\r\n");
    fscanf($fileInput, "%d", $matrixLength);
    fwrite($fileOutput, "Введите элементы подмассива массива: \r\n");
    for ($i = 0; $i < $matrixLength; $i++) {
        $elementsArray = fgets($fileInput);
        $arr = explode(' ', $elementsArray);
        array_filter($arr, "is_int");
        switch ($elementsType) {
            case INT:
                validateArray($arr, FILTER_VALIDATE_INT);
                $matrix[$i] = array_map("intval", $arr);
                break;
            case FLOAT:
                validateArray($arr, FILTER_VALIDATE_FLOAT);
                $matrix[$i] = array_map("floatval", $arr);
                break;
            default:
                throw new Exception('Неверный тип');
        }
    }
    switch ($matrixForm) {
        case SQUARE:
            checkingMatrixForm($matrix);
            return $matrix;
            break;
        case RECTANGLE:
            return $matrix;
            break;
        default:
            throw new Exception('Неверный тип матрицы');
    }
}

function outputMatrix($file, array $arr): void
{
    fwrite($file, "Матрица на вывод: \r\n");
    foreach ($arr as $key => $ele) {
        fprintf($file, "%d => ", $key);
        foreach ($ele as $el) {
            fprintf($file, "%.2f ", $el);
        }
        fprintf($file, "\r\n");
    }
}

function outputArray($file, array $arr): void
{
    fwrite($file, "Массив на вывод: \r\n");
    foreach ($arr as $el) {
        fprintf($file, "%.2f\t", $el);
    }
}

function numberOfElements(array $arr): int
{
    $count = 0;
    foreach ($arr as $value) {
        $count++;
    }
    return $count;
}

function checkingMatrixForm(array $arr): void
{
    $numberOfElements = numberOfElements($arr);
    for ($i = 0; $i < numberOfElements($arr) - 1; $i++) {
        if (numberOfElements($arr) !== numberOfElements($arr[$i])) {
            throw new Exception("Строка должна быть длиной $numberOfElements");
        }
    }
}

function verticalFlip(array $arr): array
{
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        for ($j = 0; $j < numberOfElements($arr[$i]) / 2; $j++) {
            swap($arr[$i][$j], $arr[$i][numberOfElements($arr[$i]) - $j - 1]);
        }
    }
    return $arr;
}

function valueOfMinElement(array $arr)
{
    $min = $arr[0];
    foreach ($arr as $value) {
        if ($value < $min) {
            $min = $value;
        }
    }
    return $min;
}

function valueOfMaxElement(array $arr)
{
    $max = $arr[0];
    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}

function indexesOfMinElement(array $arr): array
{
    $minValue = valueOfMinElement($arr);
    $indexes = [];
    foreach ($arr as $key => $value) {
        if ($value === $minValue) {
            $indexes[] = $key;
        }
    }
    return $indexes;
}

function indexesOfMaxElement(array $arr): array
{
    $maxValue = valueOfMaxElement($arr);
    $indexes = [];
    foreach ($arr as $key => $value) {
        if ($value === $maxValue) {
            $indexes[] = $key;
        }
    }
    return $indexes;
}

function swap(& $firstElement, & $secondElement): void
{
    $temp = $secondElement;
    $secondElement = $firstElement;
    $firstElement = $temp;
}

function maxMatrixElementColumnIndex(array $arr)
{
    $maxValue = $arr[0][0];
    $indexMax = 0;
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        $indexOfMaxValue = indexesOfMaxElement($arr[$i]);
        if ($arr[$i][$indexOfMaxValue[0]] > $maxValue) {
            $maxValue = $arr[$i][$indexOfMaxValue[0]];
            $indexMax = $indexOfMaxValue[0];
        }
    }
    return $indexMax;
}

function minMatrixElementIndexRow(array $arr)
{
    $minValue = $arr[0][0];
    $minElementIndex = 0;
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        $minInRow = valueOfMinElement($arr[$i]);
        if ($minInRow < $minValue) {
            $minValue = $minInRow;
            $minElementIndex = $i;
        }
    }
    return $minElementIndex;
}

function elementsValueDownMainDiagonal(array $arr): array
{
    $downValue = [];
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        for ($j = 0; $j < numberOfElements($arr[$i]); $j++) {
            if ($i > $j) {
                $downValue[] = $arr[$i][$j];
            }
        }
    }
    return $downValue;
}

function elementsValueTopMainDiagonal(array $arr): array
{
    $topValue = [];
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        for ($j = 0; $j < numberOfElements($arr[$i]); $j++) {
            if ($i < $j) {
                $topValue[] = $arr[$i][$j];
            }
        }
    }
    return $topValue;
}

function elementsValueDownCollateralDiagonal(array $arr): array
{
    $downValue = [];
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        for ($j = 0; $j < numberOfElements($arr[$i]); $j++) {
            if ($i + $j >= numberOfElements($arr[$i])) {
                $downValue[] = $arr[$i][$j];
            }
        }
    }
    return $downValue;
}

function elementsValueTopCollateralDiagonal(array $arr): array
{
    $topValue = [];
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        for ($j = 0; $j < numberOfElements($arr[$i]); $j++) {
            if ($i + $j < numberOfElements($arr[$i]) - 1) {
                $topValue[] = $arr[$i][$j];
            }
        }
    }
    return $topValue;
}

function positiveElements(array $arr): array
{
    $positive = [];
    foreach ($arr as $value) {
        if ($value > 0) {
            $positive[] = $value;
        }
    }
    return $positive;
}

function elementsValuesMainDiagonal(array $arr): array
{
    $mainValues = [];
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        $mainValues[] = $arr[$i][$i];
    }
    return $mainValues;
}

function indexOfMaxDiagonalElement(array $arr): array
{
    $max = $arr[0][0];
    $indexMax = [];
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        for ($j = 0; $j < numberOfElements($arr[$i]); $j++) {
            if (($i === $j || $i + $j === numberOfElements($arr[$i]) - 1) && $arr[$i][$j] > $max) {
                $max = $arr[$i][$j];
                $indexMax[0] = $i;
                $indexMax[1] = $j;
            }
        }
    }
    return $indexMax;
}

function elementsValuesCollateralDiagonal(array $arr): array
{
    $collateralValue = [];
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        for ($j = 0; $j < numberOfElements($arr[$i]); $j++) {
            if ($i + $j === numberOfElements($arr[$i]) - 1) {
                $collateralValue[] = $arr[$i][$j];
            }
        }
    }
    return $collateralValue;
}

function connectArraysThroughOneElement(array $firstArr, array $secondArr, $amountOfElements): array
{
    $connectArray = [];
    for ($i = 0; $i < $amountOfElements; $i++) {
        $connectArray[] = $i % 2 ? $firstArr[$i] : $secondArr[$i];
    }
    return $connectArray;
}

function sumOfElements(array $arr)
{
    $sum = 0;
    foreach ($arr as $value) {
        $sum += $value;
    }
    return $sum;
}

function valuesOfMaxElementColumns(array $arr): array
{
    $maxCol = [];
    for ($j = 0; $j < numberOfElements($arr[0]); $j++) {
        $maxCol[] = valueOfMaxElementColumn($arr, $j);
    }
    return $maxCol;
}

function valueOfMaxElementColumn(array $arr, int $columnNumber)
{
    $max = $arr[0][$columnNumber];
    for ($i = 1; $i < numberOfElements($arr); $i++) {
        if ($arr[$i][$columnNumber] > $max) {
            $max = $arr[$i][$columnNumber];
        }
    }
    return $max;
}

function mergingArrays(array $firstArr, array $secondArr): array
{
    $firstLength = numberOfElements($firstArr);
    $secondLength = numberOfElements($secondArr);
    for ($i = 0; $i < $secondLength; $i++) {
        $firstArr[$firstLength + $i + 1] = $secondArr[$i];
    }
    return $firstArr;
}

function sumOfColumnsElements(array $arr): array
{
    $columnSum = [];
    for ($j = 0; $j < numberOfElements($arr[0]); $j++) {
        $sum = 0;
        for ($i = 0; $i < numberOfElements($arr); $i++) {
            $sum += $arr[$i][$j];
        }
        $columnSum[$j] = $sum;
    }
    return $columnSum;
}

function halfSumDiagonal(array $main, array $collateral): array
{
    $halfSum = [];
    for ($i = 0; $i < numberOfElements($main); $i++) {
        $halfSum[] = ($main[$i] + $collateral[$i]) / 2;
    }
    return $halfSum;
}

function matrixCheckForSymmetry(array $arr): bool
{
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        for ($j = 0; $j < numberOfElements($arr[$i]); $j++) {
            if ($arr[$i][$j] !== $arr[$j][$i]) {
                return false;
            }
        }
    }
    return true;
}

function sumOfElementsRow(array $arr): array
{
    $rowSum = [];
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        $rowSum[$i] = sumOfElements($arr[$i]);
    }
    return $rowSum;
}

function maxMatrixElementValue(array $arr)
{
    $maxValue = $arr[0][0];
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        $indexOfMaxValue = indexesOfMaxElement($arr[$i]);
        if ($arr[$i][$indexOfMaxValue[0]] > $maxValue) {
            $maxValue = $arr[$i][$indexOfMaxValue[0]];
        }
    }
    return $maxValue;
}

function simpleNumberCheck(int $element): bool
{
    $a = 2;
    do {
        if (($element % $a === 0 && $element !== $a) || $element === 1) {
            return false;
        }
        $a++;
    } while ($a <= $element);
    return true;
}

function simpleNumberOnMatrix(array $arr)
{
    $numberOfSimple = 0;
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        for ($j = 0; $j < numberOfElements($arr[$i]); $j++) {
            if (simpleNumberCheck($arr[$i][$j])) {
                $numberOfSimple++;
            }
        }
    }
    return $numberOfSimple;
}

function sortRowNondecreasing(array $arr): array
{
    $count = 0;
    while (numberOfElements($arr[0]) > $count) {
        for ($i = 0; $i < numberOfElements($arr); $i++) {
            for ($j = 0; $j < numberOfElements($arr[$i]) - 1; $j++) {
                if ($arr[$i][$j] > $arr[$i][$j + 1]) {
                    swap($arr[$i][$j], $arr[$i][$j + 1]);
                }
            }
        }
        $count++;
    }
    return $arr;
}

function sortRowByColumnNondecreasing(array $arr): array
{
    $count = 0;
    while (numberOfElements($arr) > $count) {
        for ($i = 0; $i < numberOfElements($arr); $i++) {
            if ($arr[$i][0] > $arr[$i + 1][0]) {
                if ($i + 1 < numberOfElements($arr)) {
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$i + 1];
                    $arr[$i + 1] = $temp;
                }
            }
        }
        $count++;
    }
    return $arr;
}

function rowLargestNumberZeros(array $arr): array
{
    $zeroRows = [];
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        $zero = 0;
        for ($j = 0; $j < numberOfElements($arr[$i]) - 1; $j++) {
            if ($arr[$i][$j] === 0) {
                $zero++;
            }
        }
        $zeroRows[$i] = $zero;
    }
    return $zeroRows;
}

function simpleNumberOnMatrixToZero(array $arr)
{
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        for ($j = 0; $j < numberOfElements($arr[$i]); $j++) {
            if (simpleNumberCheck($arr[$i][$j])) {
                $arr[$i][$j] = 0;
            }
        }
    }
    return $arr;
}

function transpose(array $arr): array
{
    $count = 0;
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        for ($j = 0; $j < numberOfElements($arr[$i]); $j++) {
            if ($j + $count >= numberOfElements($arr[$i])) {
                break;
            }
            swap($arr[$j + $count][$i], $arr[$i][$j + $count]);
        }
        $count = 1;
    }
    return $arr;
}

function positionRelativeToTheMainDiagonal(array $arr, $element): bool
{
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        for ($j = 0; $j < numberOfElements($arr[$i]); $j++) {
            if ($i > $j && $element === $arr[$i][$j]) {
                return true;
            }
            if ($i < $j && $element === $arr[$i][$j]) {
                return false;
            }
        }
    }
}

function positionRelativeToTheCollateralDiagonal(array $arr, $element): bool
{
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        for ($j = 0; $j < numberOfElements($arr[$i]); $j++) {
            if ($i + $j < numberOfElements($arr[$i]) - 1 && $element === $arr[$i][$j]) {
                return true;
            }
            if ($i + $j >= numberOfElements($arr[$i]) && $element === $arr[$i][$j]) {
                return false;
            }
        }
    }
}