<?php

function adjacentElementsProduct($array) {
    /*
    Given an array of integers , Find the maximum product 
    obtained from multiplying 2 adjacent numbers in the array.
    */

    // Store in res the products of adjacent numbers
    $res = [];
    // Loop through all values in $array
    for($i = 0; $i < count($array) - 1; $i++) {
        // Push to $res the product of each adjacent pair
        array_push($res, $array[$i] * $array[$i + 1]);
    }
    // Return the max from $res
    return max($res);
}

echo adjacentElementsProduct([1, 5, 10, 9]); // 90