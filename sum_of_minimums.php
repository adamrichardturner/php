<?php

function sum_of_minimums($numbers) {
  /*
    Given a 2D ( nested ) list ( array, vector, .. ) of size m * n, 
    your task is to find the sum of the minimum values in each row.

    For Example:

    [ [ 1, 2, 3, 4, 5 ]        #  minimum value of row is 1
    , [ 5, 6, 7, 8, 9 ]        #  minimum value of row is 5
    , [ 20, 21, 34, 56, 100 ]  #  minimum value of row is 20
    ]
    So the function should return 26 because the sum of the minimums is 1 + 5 + 20 = 26.
  */
    // Store in minimums our minimum value for each nested array
    $minimums = [];
    // For each array in $value...
    foreach ($numbers as $value) {
        // Push to $minimums the minimum value in the array
        array_push($minimums, min($value));
    }
    // Return the sum of minimums
    return array_sum($minimums);
}

print_r(sum_of_minimums([[7, 9, 8, 6, 2], [6, 3, 5, 4, 3], [5, 8, 7, 4, 5]])); // 9