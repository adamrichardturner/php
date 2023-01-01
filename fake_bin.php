<?php

function fake_bin(string $s): string {
    /*
    Given a string of digits, you should replace any digit below 5 with '0' 
    and any digit 5 and above with '1'. Return the resulting string.
    */

    // Store in $fake_binary an array of the chars converted based on a condition
    $fake_binary = [];
    // For each value in $s, split into an array of individual chars
    foreach (str_split($s) as $value) {
        // If the char converted to integer is <5, push '0' to $fake_binary, else '1'
        intval($value) < 5 ? array_push($fake_binary, '0') : array_push($fake_binary, '1');
    }
    // Return the $fake_binary array as a string
    return implode($fake_binary);
}

print_r(fake_bin('45385593107843568')); // 00010010001100011                                                                                                                                                                                     