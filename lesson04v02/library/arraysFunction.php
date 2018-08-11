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

function uniteArray(array $firstArray, array $secondArray): array
{
    for ($i = 0; $i < numberOfElements($secondArray); $i++) {
        $firstArray[] = $secondArray[$i];
    }
    return $firstArray;
}