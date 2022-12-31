<?php

function isIsogram($string) {
    /*
    An isogram is a word that has no repeating letters, consecutive or non-consecutive. 
    Implement a function that determines whether a string that contains only letters 
    is an isogram. Assume the empty string is an isogram. Ignore letter case.
    */

    // Store in seen values within $string that we have seen during iteration
    $seen = [];
    // For each value in $string with all chars within set to lowercase
    foreach (str_split(strtolower($string)) as $value) {
        // If $value is in $seen, return false as not an isogram then
        if (in_array($value, $seen)) {
            return false;
        } else {
            // Else add $value to $seen, because we have seen it during iteration
            array_push($seen, $value);
        }
    }
    // Return true if we did not see any values in $seen more than once
    return true;
}

print_r(isIsogram("moOse")); // false
print_r(isIsogram("isIsogram")); // false
print_r(isIsogram("hat")); // true