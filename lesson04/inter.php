<?php
declare(strict_types=1);

function validateArray(array $arr, int $filterFormat): void
{
    foreach ($arr as $item) {
        if (filter_var($item, $filterFormat) === false) {
            throw new Exception('Invalid array element');
        }
    }
}

function createAndInputArray($fileOutput, $fileInput, string $elementsType): array
{
    fwrite($fileOutput, "Введите элементы массива: \r\n");
    $elementsArray = fgets($fileInput);
    $arr = explode(' ', $elementsArray);

    array_filter($arr, "is_int");
    switch ($elementsType) {
        case 'int':
            validateArray($arr, FILTER_VALIDATE_INT);
            return array_map("intval", $arr);
            break;
        case 'float':
            validateArray($arr, FILTER_VALIDATE_FLOAT);
            return array_map("floatval", $arr);
            break;
        default:
            throw new Exception('Неверный тип');
    }
}

function outputArray($file, array $arr): void
{
    fwrite($file, "Массив на вывод: \r\n");
    foreach ($arr as $el) {
        fprintf($file, "%.2f\t", $el);
    }
}

function valueOfMaxElement(array $arr)
{
    if (empty($arr)) {
        throw new Exception("Пустой массив");
    }
    $max = $arr[0];
    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value;
        }
    }
    return $max;
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

function numberOfElements(array $arr): int
{
    $count = 0;
    foreach ($arr as $value) {
        $count++;
    }
    return $count;
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

function arithmeticMeanOfElements(array $arr)
{
    return summOfElements($arr) / numberOfElements($arr);
}

function changeElementsValue(array $arr, $oldElement, $newElement): array
{
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        if ($arr[$i] === $oldElement) {
            $arr[$i] = $newElement;
        }
    }
    return $arr;
}

function valueOfMinElement(array $arr)
{
    if (empty($arr)) {
        throw new Exception("Пустой массив");
    }
    $min = $arr[0];
    foreach ($arr as $value) {
        if ($value < $min) {
            $min = $value;
        }
    }
    return $min;
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

function summOfElements(array $arr)
{
    $summ = 0;
    foreach ($arr as $value) {
        $summ += $value;
    }
    return $summ;
}

function indexesOfPositiveElement(array $arr): array
{
    $indexes = [];
    foreach ($arr as $key => $value) {
        if ($value > 0) {
            $indexes[] = $key;
        }
    }
    return $indexes;
}

function sequentialAddition(array $arr): array
{
    $addition = [];
    $summ = 0;
    foreach ($arr as $value) {
        $summ += $value;
        $addition[] = $summ;
    }
    return $addition;
}

function swap(& $firstElement, & $secondElement): void
{
    $temp = $secondElement;
    $secondElement = $firstElement;
    $firstElement = $temp;
}

//Подправить
function uniqleElementsValue(array $arr): array
{
    $uniqleValue = [];
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        for ($j = 0; $j < numberOfElements($arr); $j++) {
            if ($uniqleValue[$j] === $arr[$i]) {
                unset($uniqleValue[$j]);
            }
            $uniqleValue[$i] = $arr[$i];
        }
    }
    return $uniqleValue;
}

function reverseElementsValue(array $arr): array
{
    $reverse = [];
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        $reverse[] = $arr[numberOfElements($arr) - $i - 1];
    }
    return $reverse;
}

function valuesMoreThat(array $arr, $filter): array
{
    $filtred = [];
    foreach ($arr as $value) {
        if ($value > $filter) {
            $filtred[] = $value;
        }
    }
    return $filtred;
}

function differenseOfArrays(array $firstArr, array $secondArr): array
{
    $firstLength = numberOfElements($firstArr);
    $secondLength = numberOfElements($secondArr);
    for ($i = 0; $i < $secondLength; $i++) {
        for ($j = 0; $j < $firstLength; $j++) {
            if ($firstArr[$firstLength - $j - 1] === $secondArr[$i]) {
                unset($firstArr[$firstLength - $j - 1]);
            }
        }
    }
    return indexSwitcher($firstArr, $firstLength, 0);
}

function indexSwitcher(array $arr, $arrayLength, $firstIndex): array
{
    $newArray = [];
    for ($k = 0; $k < $arrayLength; $k++) {
        if ($arr[$k] || $arr[$k] === 0) {
            $newArray[$firstIndex] = $arr[$k];
            $firstIndex++;
        }
    }
    return $newArray;
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

function positiveElementsBeforeNegativ(array $arr): array
{
    $positiveElements = [];
    foreach ($arr as $value) {
        if ($value < 0) {
            break;
        }
        $positiveElements[] = $value;
    }
    return $positiveElements;
}

function swapZeroElementsBeforeNegativToOne(array $arr): array
{
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        if ($arr[$i] < 0) {
            break;
        }
        if ($arr[$i] === 0) {
            $arr[$i] = 1;
        };
    }
    return $arr;
}

function negativeElements(array $arr): array
{
    $negatie = [];
    foreach ($arr as $value) {
        if ($value < 0) {
            $negatie[] = $value;
        }
    }
    return $negatie;
}

function zeroElements(array $arr): array
{
    $zero = [];
    foreach ($arr as $value) {
        if ($value === 0) {
            $zero[] = $value;
        }
    }
    return $zero;
}

function multiplicationElementsValue(array $arr)
{
    $op = 1;
    foreach ($arr as $value) {
        $op *= $value;
    }
    return $op;
}

function elementsValueOfEvenIndexes(array $arr): array
{
    $even = [];
    foreach ($arr as $key => $value) {
        if ($key % 2 === 0) {
            $even[] = $value;
        }
    }
    return $even;
}

function elementsValueOfOddIndexes(array $arr): array
{
    $odd = [];
    foreach ($arr as $key => $value) {
        if ($key % 2 !== 0) {
            $odd[] = $value;
        }
    }
    return $odd;
}

function summValueDenominator(array $arr, int $denominator)
{
    $summ = 0;
    foreach ($arr as $value) {
        if ($value % $denominator === 0) {
            $summ = $summ + $value;
        }
    }
    return $summ;
}

function searchOrdinalNumberOfNearestElement(array $arr, $searchNumber): int
{
    $length = numberOfElements($arr);
    indexSwitcher($arr, $length, 2);
    $number = $arr[0];
    $OrdinalNumber = 0;
    foreach ($arr as $key => $value) {
        if (abs($value - $searchNumber) < $number) {
            $OrdinalNumber = $key;
        }
    }
    return $OrdinalNumber;
}

function zeroLongestRow(array $arr): int
{
    $length = numberOfElements($arr);
    indexSwitcher($arr, $length, 0);
    $count = 0;
    $zeroArr = [];
    for ($i = 0; $i < $length; $i++) {
        if ($arr[$i] === 0) {
            $count++;
            $zeroArr[] = $count;
        } else {
            $count = 0;
        }
    }
    return valueOfMaxElement($zeroArr);
}

function countOfMaxElementsValue(array $arr): int
{
    $max = valueOfMaxElement($arr);
    $countMax = 0;
    foreach ($arr as $value) {
        if ($value === $max) {
            $countMax++;
        }
    }
    return $countMax;
}

function searchRadius(array $arr1, array $arr2)
{
    $radius = [];
    $length = numberOfElements($arr1);
    if (numberOfElements($arr1) !== numberOfElements($arr2)) {
        throw new Exception('Массивы разной длины');
    } else {
        for ($i = 0; $i < $length; $i++) {
            $radius[] = sqrt(pow($arr1[$i], 2) + pow($arr2[$i], 2));
        }
    }
    return valueOfMaxElement($radius);
}

function dispersion(array $arr)
{
    $expectedValue = arithmeticMeanOfElements($arr);
    $summ = 0;
    foreach ($arr as $value) {
        $summ += pow(($value - $expectedValue), 2);
    }
    $dispersion = sqrt($summ / (numberOfElements($arr) - 1));
    return $dispersion;
}

function deleteElements(array $arr, $deleteValue): array
{
    $filtred = [];
    foreach ($arr as $value) {
        if ($value !== $deleteValue) {
            $filtred[] =  $value;
        }
    }
    return $filtred;
}

function frequencyOfOccurrence(array $arr1, array $arr2): array
{
    $length1 = numberOfElements($arr1);
    $length2 = numberOfElements($arr2);
    $arr3 = [];
    $count = 0;
    for ($i = 0; $i < $length2; $i++) {
        for ($j = 0; $j < $length1; $j++) {
            if ($arr2[$i] === $arr1[$j]) {
                $count++;
            }
        }
        $arr3[$count] = $arr2[$i];
        $count = 0;
    }
    return $arr3;
}