<?php

function tower_builder(int $n): array {
    /*
    Build a pyramid-shaped tower, as an array/list of strings, 
    given a positive integer number of floors. A tower block 
    is represented with "*" character.

    For example, a tower with 3 floors looks like this:
    [
    "  *  ",
    " *** ", 
    "*****"
    ]
    */

    // Store in $tower our final pyramid tower of asterisks
    $tower = [];
    // For loop from 1 to $n*2 incrementing $i by two on each iteration because 2x asterisks
    // are added to each floor as it grows...
    for ($i = 1; $i <= $n*2; $i+= 2) {
        // Push to $tower "*" repeated $i times, padded on both sides with spaces, with a 
        // string length of ($n * 2 - 1) because this is the length of the pyramid base
        array_push($tower, str_pad(str_repeat('*', $i), $n * 2 - 1, ' ', STR_PAD_BOTH));
    }
    // If less than 2, return only one floor I.E '*', else return $tower
    return $n < 2 ? ['*'] : $tower;
}

print_r(tower_builder(6));

// (
//     [0] =>      *     
//     [1] =>     ***    
//     [2] =>    *****   
//     [3] =>   *******  
//     [4] =>  ********* 
//     [5] => ***********
// )