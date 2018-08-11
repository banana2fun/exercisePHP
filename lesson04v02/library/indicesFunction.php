<?php

declare(strict_types=1);

function indicesOfArrayElements(array $arr, $element): array
{
    $indices = [];
    foreach ($arr as $key => $item) {
        if ($item === $element) {
            $indices[] = $key;
        }
    }
    if (numberOfElements($arr) === 0) {
        throw new Exception('Элемент не найден');
    }
    return $indices;
}