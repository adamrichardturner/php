<?php

function solve($arr) {
    /*
    Remove the duplicates from a list of integers, keeping 
    the last ( rightmost ) occurrence of each element.
    */

    // Store in $clean our non-duplicate values
    $clean = [];
    // For each value in $arr, reversed, working right to left
    // as we want to keep the right-most non-duplicates
    foreach (array_reverse($arr) as $value) {
        // If $value is not already in $clean, add it
        !in_array($value, $clean) ? array_push($clean, $value) : 0;
    }
    // Return the reverse of $clean 
    return array_reverse($clean);
}

print_r(solve([3, 4, 4, 3, 6, 3])); // [4, 6, 3]