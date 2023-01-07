<?php

function duplicateCount($text) {
    /*
    Write a function that will return the count of distinct case-insensitive 
    alphabetic characters and numeric digits that occur more than once in 
    the input string. The input string can be assumed to contain only 
    alphabets (both uppercase and lowercase) and numeric digits.
    */

    // Store our count of distinct case-insensitive duplicates here
    $count = 0;
    // Store in $arr, all values in $text lowercased, as an array
    $arr = array_map('strtolower', str_split($text));
    // Increment count where there is more than 1 occurrence of $value
    foreach (array_count_values($arr) as $value) {
        if($value > 1) {
            $count++;
        }
    }
    return $count;
}

print_r(duplicateCount("aabBcde")); // 2