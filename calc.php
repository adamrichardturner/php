<?php

function calc($s) {
    /*
    Given a string, turn each character into its ASCII character code 
    and join them together to create a number - let's call this number total1:

    'ABC' --> 'A' = 65, 'B' = 66, 'C' = 67 --> 656667
    Then replace any incidence of the number 7 with the number 1, 
    and call this number 'total2':

    total1 = 656667
                ^
    total2 = 656661
                ^
    Then return the difference between the sum of the digits 
    in total1 and total2:

    (6 + 5 + 6 + 6 + 6 + 7)
    - (6 + 5 + 6 + 6 + 6 + 1)
    -------------------------
                        6
    */

    // Split string into array, map each value into new array as it's ASCII code
    $total1 = implode(array_map(fn($n) => strval(ord($n)), str_split($s)));
    // Replace each instance of '7' with '1' 
    $total2 = str_replace('7', '1', $total1);
    // Convert $total1 to array, sum it, same for $total2 - return diff
    return array_sum(str_split($total1)) - array_sum(str_split($total2));
}

echo calc('abcdef'); // 6