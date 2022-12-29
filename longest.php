<?php

function longest($a, $b) {
    /*
    Take 2 strings s1 and s2 including only letters from a to z. 
    Return a new sorted string, the longest possible, containing 
    distinct letters - each taken only once - coming from s1 or s2.

    a = "xyaabbbccccdefww"
    b = "xxxxyyyyabklmopq"
    longest(a, b) -> "abcdefklmopqwxy"

    */

    // Store in $unique the unique chars in both $a and $b
    $unique = [];
    // For each value in $a concatenated with $b as an array
    foreach(str_split($a . $b) as $value) {
        // If the value is in $unique, skip that value
        if (in_array($value, $unique)) {
            continue;
        } else {
            // Else, add to $unique the value
            array_push($unique, $value);
        }
    }
    // Sort the unique values in $unique
    sort($unique);
    // Return as a string
    return implode($unique);
}

print_r(longest("aretheyhere", "yestheyarehere")); // aehrsty