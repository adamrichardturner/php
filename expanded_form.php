<?php

function expanded_form(int $n): string {
    /*
    You will be given a number and you will need to return it 
    as a string in Expanded Form. For example:

    expanded_form(12); // Should return "10 + 2"
    expanded_form(42); // Should return "40 + 2"
    expanded_form(70304); // Should return "70000 + 300 + 4"
    NOTE: All numbers will be whole numbers greater than 0.
    */

    // Convert $n to a string and reverse it
    $str = strrev(strval($n));
    // Store in $expanded each value expanded
    $expanded = [];
    // For each value in $str
    for ($i = 0; $i < strlen($str); $i++) {
        // If the integer value is not equal to 0
        if (intval($str[$i]) != 0) {
            // Push to $expanded the integer value of $str[$i] 
            // multiplied by 10 to the power of $i
            array_push($expanded, intval($str[$i]) * (10 ** $i));
        }
    }
    // Return the $expanded array joined with ' + '
    return implode(" + ", array_reverse($expanded));
}

echo expanded_form(12); // "10 + 2"
echo expanded_form(42); // "40 + 2"
echo expanded_form(70304); // "70000 + 300 + 4"