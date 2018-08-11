<?php

declare(strict_types=1);

function sumOfElements(array $arr)
{
    $sum = 0;
    foreach ($arr as $item) {
        $sum += $item;
    }
    return $sum;
}

function numberOfElements(array $arr): int
{
    $number = 0;
    foreach ($arr as $item) {
        $number++;
    }
    return $number;
}

function substituteOneElement(array $arr, $oldElement, $newElement): array
{
    $check = 0;
    for ($i = 0; $i < numberOfElements($arr); $i++) {
        if ($arr[$i] === $oldElement) {
            $arr[$i] = $newElement;
            $check = 1;
            break;
        }
    }
    if ($check === 0) {
        throw new Exception('Исходный элемент не обнаружен');
    }
    return $arr;
}

function swapElements(& $firstElement, & $secondElement): void
{
    $temp = $secondElement;
    $secondElement = $firstElement;
    $firstElement = $temp;
}

function sequentialSum(array $arr)
{
    $sumArray = [];
    $sum = 0;
    foreach ($arr as $item) {
        $sum += $item;
        $sumArray[] = $sum;
    }
    return $sumArray;
}