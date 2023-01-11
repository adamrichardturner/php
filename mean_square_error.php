<?php

function solution(array $a, array $b): float {
    /*
    Complete the function that

    - accepts two integer arrays of equal length
    - compares the value each member in one array to the corresponding member in the other
    - squares the absolute value difference between those two values
    - and returns the average of those squared absolute value difference between each member pair.
    */

    // Store in $absolutes the squared absolute value differences between the array pairs
    $absolutes = [];
    // For each value in $a
    for ($i = 0; $i < count($a); $i++) {
        // Push to $absolutes the absolute value difference squared between the array pairs
        array_push($absolutes, abs($a[$i] - $b[$i]) ** 2);
    }
    // Return the mean value of $absolutes
    return array_sum($absolutes)/count($a);
}

print_r(solution([1, 2, 3], [4, 5, 6])); // 9