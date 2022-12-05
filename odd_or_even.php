<?php

function odd_or_even(array $a): string {
    /*
    Given a list of integers, determine whether the sum 
    of its elements is odd or even.

    Give your answer as a string matching "odd" or "even".

    If the input array is empty consider it as: [0] (array with a zero).
    */
    return array_sum($a) % 2 === 0 ? "even" : "odd";
}

print_r(odd_or_even([0])); // even
print_r(odd_or_even([2, 5, 34, 6])); // odd