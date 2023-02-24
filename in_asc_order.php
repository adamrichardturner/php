<?php

function in_asc_order($arr) {
    /*
    In this Kata, your function receives an array of integers as input. 
    Your task is to determine whether the numbers are in ascending order.
    An array is said to be in ascending order if there are no two adjacent 
    integers where the left integer exceeds the right integer in value.
    */

    // Iterate over each element in $arr, if the current element the loop
    // encounters is greater than the next in the series, return false
    for($i = 0; $i < count($arr) -1; $i++) {
        if($arr[$i] > $arr[$i+1]) {
            return false;
        }
    }
    // Provided the above loop didn't return false, you have an array
    // in ascending order, so return true
    return true;
}

echo in_asc_order([1, 2, 4, 7, 19]); // true