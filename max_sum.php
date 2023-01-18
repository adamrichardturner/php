<?php

function max_sum(array $a, array $range): int {
    /*
    Given an array $a that contains some integers and a $range list 
    such as [[$start1, $end1], [$start2, $end2], ... ] where
    $start(n) and $end(n) are valid keys of the non-associative 
    array $a and $start(n) is always guaranteed to be strictly less 
    than $end(n). Your task is to calculate the sum value of each 
    range (start index and end index are both inclusive) and 
    return the maximum sum value.
    */

    // Store in $sums the sum value of each range in $range with
    // reference to $a
    $sums = [];
    // For each array ($arr) in $range
    foreach ($range as $arr) {
        // Store the sum of each range of $a in $sum on each iteration
        $sum = 0;
        // For each range...
        for ($i = $arr[0]; $i <= $arr[1]; $i++) {
            // Add to $sum the range of indexes in $a sum
            $sum += $a[$i];
        }
        // Push $sum to $sums
        array_push($sums, $sum);
    }
    // Return the max value of $sums
    return max($sums);
}

max_sum([1, -2, 3, 4, -5, -4, 3, 2, 1], [[1, 3], [0, 4], [6, 8]]); // 6