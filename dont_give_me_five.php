<?php

function dont_give_me_five($start, $end) {
    /*
    In this kata you get the start number and the end number of a 
    region and should return the count of all numbers except numbers 
    with a 5 in it. The start and the end number are both inclusive!

    Examples:

    1,9 -> 1,2,3,4,6,7,8,9 -> Result 8
    4,17 -> 4,6,7,8,9,10,11,12,13,14,16,17 -> Result 12
    */

    // Store in $nums our range of integers including those that contain
    // the digit 5
    $nums = range($start, $end);
    // $count will store our total of numbers within nums that don't
    // contain the digit 5
    $count = 0;
    // For each number within $nums
    foreach ($nums as $num) {
        // If $num converted to string contains the char '5', null, else
        // increment count
        str_contains(strval($num), '5') ? null : $count++;
    }
    return $count;
}

print_r(dont_give_me_five(1, 9)); // 8
print_r(dont_give_me_five(4, 17)); // 12