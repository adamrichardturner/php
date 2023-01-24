<?php

function alphanumeric(string $s): bool {
    /*
    In this example you have to validate if a user input string is alphanumeric. 
    The given string is not nil/null/NULL/None, so you don't have to check that.
    The string has the following conditions to be alphanumeric:

    At least one character ("" is not valid)
    Allowed characters are uppercase / lowercase latin letters and digits from 0 to 9
    No whitespaces / underscore
    */

    // Store in $alphanum the alphanumeric valid characters as an array
    $alphanum = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');
    // Store in $count the number of characters within $s that are in $alphanum
    $count = 0;
    // For each value in $s split as an array
    foreach(str_split($s) as $value) {
        // If $value is in $alphanum increment $count, else nothing happens
        in_array($value, $alphanum) ? $count++ : 0;
    }
    // Return false if $s is empty, else return comparison of length of $ and $count value
    return strlen($s) === 0 ? false : strlen($s) === $count;
}

echo alphanumeric('Mazinkaiser'); // True
echo alphanumeric('hello world_'); // False
echo alphanumeric('PassW0rd'); // True