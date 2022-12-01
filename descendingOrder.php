<?php
function descendingOrder(int $n): int {
    /*
    Your task is to make a function that can take any non-negative integer as an 
    argument and return it with its digits in descending order. Essentially, 
    rearrange the digits to create the highest possible number.

    Examples:
    Input: 42145 Output: 54421

    Input: 145263 Output: 654321

    Input: 123456789 Output: 987654321
    */

    // Store in $nStr our $n input as a string, split as an array
    $nStr = str_split(strval($n));
    // Sort the above array in descending order
    rsort($nStr);
    // Return the array joined as a string --> converted to integer
    return intval(implode('', $nStr));
}

print_r(descendingOrder(42145)); // 54421