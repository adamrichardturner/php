<?php

function binaryArrayToNumber($arr) {
    /*
    Given an array of ones and zeroes, convert the equivalent binary value to an integer.

    Eg: [0, 0, 0, 1] is treated as 0001 which is the binary representation of 1.

    Examples:

    Testing: [0, 0, 0, 1] ==> 1
    Testing: [0, 0, 1, 0] ==> 2
    Testing: [0, 1, 0, 1] ==> 5
    */

    // First we re-assign $arr to its reverse as we will manipulate values right-to-left
    $arr = array_reverse($arr);
    // Store in $decimal our final integer value 
    $decimal = 0;
    // For each value in $arr...
    for($i = 0; $i < count($arr); $i++) {
        // If the value is 1, add to decimal 2 raised to $i as the exponent
        // Else just return 0 and don't do anything
        $arr[$i] == 1 ? $decimal += (pow(2, $i)) : 0;
    }
    return $decimal;
}

echo binaryArrayToNumber([0, 0, 0, 1]); // 1
echo binaryArrayToNumber([0, 1, 1, 0]); // 6
echo binaryArrayToNumber([1, 1, 1, 1]); // 15