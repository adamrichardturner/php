<?php

function createPhoneNumber($numbersArray) {
    /*
    Write a function that accepts an array of 10 integers (between 0 and 9),
     that returns a string of those numbers in the form of a phone number.
    */

    // Store in $nums variables the three parts of the number using array_slice
    // Convert these slices into strings so we can interpolate later
    $nums1 = implode(array_slice($numbersArray, 0, 3));
    $nums2 = implode(array_slice($numbersArray, 3, 3));
    $nums3 = implode(array_slice($numbersArray, 6));
    // Use string interpolation according to the format of the challenge
    return "($nums1) $nums2-$nums3";
}

print_r(createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0])); // (123) 456-7890