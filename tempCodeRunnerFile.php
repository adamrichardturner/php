<?php
function moveZeros(array $items): array {
    /*
    Write an algorithm that takes an array and moves all of the zeros 
    to the end, preserving the order of the other elements.

    moveZeros([false,1,0,1,2,0,1,3,"a"]) 
    // returns[false,1,1,2,1,3,"a",0,0]
    */
    $numZeros = 0;
    $newArr = [];
    foreach ($items as $value) {
        if ($value === 0 || is_float($value) && gettype($value) !== 'string' && strval($value) === '0') {
            $numZeros++;
        } else {
            array_push($newArr, $value);
        }
    }
    return array_merge($newArr, array_fill(0, $numZeros, 0));
}