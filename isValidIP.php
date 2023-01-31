<?php

function isValidIP(string $str): bool {
    /*
    Write an algorithm that will identify valid IPv4 addresses in dot-decimal format. 
    IPs should be considered valid if they consist of four octets, with values 
    between 0 and 255, inclusive.

    Valid inputs examples:
    Examples of valid inputs:
    1.2.3.4
    123.45.67.89
    Invalid input examples:
    1.2.3
    1.2.3.4.5
    123.456.78.90
    123.045.067.089
    Notes:
    Leading zeros (e.g. 01.02.03.04) are considered invalid
    Inputs are guaranteed to be a single string
    */

    // Store our count of valid octets here, exactly 4 is a valid address
    $count = 0;
    // For each value in $str as an array split with '.' as the delimiter
    foreach(explode('.', $str) as $char) {
        // If $char has no spaces...
        if ($char === trim($char)) {
            // And $char is a numeric value
            if(is_numeric($char)) {
                // If $char's length is > 1 and not starting with '0'
                if (strlen($char) > 1 && substr($char, 0, 1) !== '0') {
                    // If $char as an integer is in the valid range for IPv4
                    if (intval($char) >= 0 && intval($char) <= 255) {
                        // Increment $count as we have a valid octet
                        $count++;
                    }
                // If $char is a single digit, it's valid so increment $count
                } else if (strlen($char) === 1) {
                    $count++;
                }
            }
        // If the above tests fail, the octet is invalid so return false
        } else {
            return false;
        }
    }
    // 4 valid octets is valid IPv4
    return $count === 4;
}

echo isValidIP('1.1.1.1'); // true
echo isValidIP('255.255.255.255'); // true
echo isValidIP(' 1.1ab.1.1'); // false