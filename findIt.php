<?php

function findIt(array $seq) : int {
    /*
    Given an array of integers, find the one that appears an odd number of times.
    There will always be only one integer that appears an odd number of times.
    */

    // For each $key $value pair in $seq as associative array of values => counts
    foreach (array_count_values($seq) as $key => $value) {
        // If $value is odd i.e its frequency in $seq is odd...
        if ($value % 2 != 0) {
            // Return $key, the value that appears odd times in $seq
            return $key;
        }
    }
    // Should the above code path fail, simply return the first value in $seq
    return $seq[0];
}

echo findIt([20, 1, -1, 2, -2, 3, 3, 5, 5, 1, 2, 4, 20, 4, -1, -2, 5]); // 5