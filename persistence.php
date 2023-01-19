<?php

function persistence(int $num): int {
    /*
    Write a function, persistence, that takes in a positive parameter num 
    and returns its multiplicative persistence, which is the number of 
    times you must multiply the digits in num until you reach a 
    single digit.
    For example (Input --> Output):
    39 --> 3 (because 3*9 = 27, 2*7 = 14, 1*4 = 4 and 4 has only one digit)
    999 --> 4 (because 9*9*9 = 729, 7*2*9 = 126, 1*2*6 = 12,
    and finally 1*2 = 2)
    4 --> 0 (because 4 is already a one-digit number)
    */

    // Store in $count the persistence of $num
    $count = 0;
    // While $num as a string has length greater than 1...
    while (strlen(strval($num)) > 1) {
        // Re-assign $num to its digits (typecasted) multiplied by each other
        $num = array_reduce(str_split(strval($num)), fn($a, $b): int => $a * $b, 1);
        // Increment count on each iteration to determine the persistence of $num
        $count++;
    }
    return $count;
}

echo persistence(39); // 3
echo persistence(999); // 4
echo persistence(4); // 0