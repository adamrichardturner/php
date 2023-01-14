<?php

function XO($s) {
    /*
    Check to see if a string has the same amount of 'x's and 'o's. 
    The method must return a boolean and be case insensitive. 
    The string can contain any char.
    */

    // Store in $x and $o the number of 'x' or 'o' in $s
    $x = 0;
    $o = 0;
    // For each char in $s split into an array
    foreach (str_split($s) as $char) {
        // Ternary: If the char is 'x' increment $x, likewise for $o
        (strtolower($char) == 'x' ? $x++ : strtolower($char)) == 'o' ? $o++ : 0;
    }
    // Return true if equal weighting of 'x' and 'o', false otherwise
    return $x == $o;
}

print_r(XO("ooxx")); // true
print_r(XO("xo111")); // true
print_r(XO("xxxoo")); // false