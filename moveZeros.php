<?php

function moveZeros(array $items): array {
    /*
    Write an algorithm that takes an array and moves all of the zeros 
    to the end, preserving the order of the other elements.

    moveZeros([false,1,0,1,2,0,1,3,"a"]) 
    // returns[false,1,1,2,1,3,"a",0,0]
    */

    // Store our number of zeros to add to end of $newArr in $numZeros
    $numZeros = 0;
    // Store in $newArr the desired return array
    $newArr = [];
    // For each value in $items
    foreach ($items as $value) {
        // Check for a true integer 0 value, minding type coercion
        if ($value === 0 || is_float($value) && strval($value) === '0') {
            // If true, we have a real integer 0 and increment $numZeros
            $numZeros++;
        } else {
            // Else we have a non integer 0 value, push to $newArr
            array_push($newArr, $value);
        }
    }
    // Return the merger of $newArr concatenated with array filled with 
    // $numZero number of integer zeros
    return array_merge($newArr, array_fill(0, $numZeros, 0));
}

print_r(moveZeros([false, 1, 0, 1, 2, 0, 1, 3, "a"])); 
// returns[false,1,1,2,1,3,"a",0,0]