<?php

declare(strict_types=1);

function valueOfMaxElements(array $arr)
{
    $max = $arr[0];
    foreach ($arr as $item) {
        if ($item > $max) {
            $max = $item;
        }
    }
    return $max;
}

function valueOfMinElements(array $arr)
{
    $min = $arr[0];
    foreach ($arr as $item) {
        if ($item < $min) {
            $min = $item;
        }
    }
    return $min;
}

function arraySelection(array $arr, string $operator, $value): array
{
    $selection = [];
    switch ($operator) {
        case '>':
            foreach ($arr as $item) {
                if ($item > $value) {
                    $selection[] = $item;
                }
            }
            return $selection;
            break;
        case '<':
            foreach ($arr as $item) {
                if ($item < $value) {
                    $selection[] = $item;
                }
            }
            return $selection;
            break;
        case '===':
            foreach ($arr as $item) {
                if ($item === $value) {
                    $selection[] = $item;
                }
            }
            return $selection;
            break;
        default:
            throw new Exception('Неверный оператор');
    }
}

function uniqueElements(array $arr): array
{
    $unique[] = $arr[0];
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        for ($j = 0; $j < numberOfElements($unique); $j++) {
            if ($arr[$i] === $unique[$j]) {
                unset($unique[$j]);
            }
            $unique[$i] = $arr[$i];
        }
    }
    return $unique;
}

function firstNegativeElement(array $arr)
{
    $firstNegative = 0;
    foreach ($arr as $item) {
        if ($item < 0) {
            $firstNegative = $item;
            break;
        }
    }
    if ($firstNegative === 0) {
        throw new Exception('Отрицательных элементов не обнаружено');
    }
    return $firstNegative;
}

function elementsWithOddIndices(array $arr): array
{
    $elementsOddIndices = [];
    foreach ($arr as $key => $item) {
        if ($key % 2 !== 0) {
            $elementsOddIndices[] =  $item;
        }
    }
    return $elementsOddIndices;
}