<?php

function incrementer($nums) {
    /*
    Given an input of an array of digits, return the array with each digit 
    incremented by its position in the array: the first digit will be 
    incremented by 1, the second digit by 2, etc. Make sure to start 
    counting your positions from 1 ( and not 0 ).

    Your result can only contain single digit numbers, so if adding a 
    digit with its position gives you a multiple-digit number, only 
    the last digit of the number should be returned.

    Notes:
    return an empty array if your array is empty
    arrays will only contain numbers so don't worry about checking that
    */

    // If $nums is empty, return an empty array
    if (count($nums) === 0) {
        return [];
    }
    // Store in $incremented all the values in $nums incremented by their index
    $incremented = array_map(fn($num, $index) => $num + $index + 1, $nums, array_keys($nums));
    // Store in $truncated all values as above, but with anything >= 10 truncated to last digit
    $truncated = [];
    // For each value in $incremented
    foreach ($incremented as $value) {
        // Store in $strVal a string representation of $value
        $strVal = strval($value);
        // If $value is a 2 digit number, push to $truncated the last digit only of that value
        // Else, push just the value as it was
        if ($value >= 10) {
            array_push($truncated, intval(substr($strVal, strlen($strVal) - 1)));
        } else {
            array_push($truncated, $value);
        }
    }
    return $truncated;
}

print_r(incrementer([1, 2, 3])); // [2, 4, 6]
print_r(incrementer([4, 6, 7, 1, 3])); // [5, 8, 0, 5, 8]
print_r(incrementer([3, 6, 9, 8, 9])); // [4, 8, 2, 2, 4]