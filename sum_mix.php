<?php

function sum_mix($a) {
    /*
    Given an array of integers as strings and numbers, 
    return the sum of the array values as if all were numbers.

    Return your answer as a number.
    */

    // Store in $nums all values in $a as number data type
    $nums = [];
    // For each value in $a
    foreach ($a as $value) {
        // Push to $nums each value in $a as an integer
        array_push($nums, intval($value));
    }
    // Return the sum of $nums
    return array_sum($nums);
}

print_r(sum_mix(['5', '0', 9, 3, 2, 1, '9', 6, 7])); // 42