<?php

function sumCubes($n) {
    /*
    Write a function that takes a positive integer n, sums all the cubed values from 1 to n (inclusive), and returns that sum.

    Assume that the input n will always be a positive integer.

    Examples: (Input --> output)

    2 --> 9 (sum of the cubes of 1 and 2 is 1 + 8)
    3 --> 36 (sum of the cubes of 1, 2, and 3 is 1 + 8 + 27)
    */

    // Map the range of values from 1 to $n, raising them to ^3
    // Use reduce to sum the above values and return the sum
    return array_reduce(array_map(fn($num) => $num ** 3, range(1, $n)), fn($a, $b) => $a + $b);
}

echo sumCubes(2); // 9
echo sumCubes(3); // 36