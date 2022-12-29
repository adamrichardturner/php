<?php

function hasUniqueChars($string) {
    /*
    Write a program to determine if a string contains only unique characters. 
    Return true if it does and false otherwise.
    The string may contain any of the 128 ASCII characters. 
    Characters are case-sensitive, e.g. 'a' and 'A' are considered different characters.
    */

    // Store values in $string that have been visited in $seen
    $seen = [];
    // For each value in $string
    foreach (str_split($string) as $value) {
        // If the value is in $seen return false
        if (in_array($value, $seen)) {
            return false;
        // Else, push the value to $seen
        } else {
            array_push($seen, $value);
        }
    }
    return true;
}

print_r(hasUniqueChars('abcdef')); // true