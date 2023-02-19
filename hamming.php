<?php 

function hamming(string $a, string $b): int {
    /*
    The Hamming Distance is a measure of similarity between two strings 
    of equal length. Complete the function so that it returns the number 
    of positions where the input strings do not match.

    Examples:
    a = "I like turtles"
    b = "I like turkeys"
    Result: 3

    a = "Hello World"
    b = "Hello World"
    Result: 0

    a = "espresso"
    b = "Expresso"
    Result: 2
    You can assume that the two inputs are ASCII strings of equal length.
    */

    // In $diffs, store the number of differences between $a and $b
    $diffs = 0;
    // Loop through every element in $a...
    for ($i = 0; $i < strlen($a); $i++) {
        // Compare to $b, if the elements don't match, increment $diffs
        $a[$i] !== $b[$i] ? $diffs++ : 0;
    }
    return $diffs;
}

echo hamming("I like turtles", "I like turkeys"); // 3
echo hamming("Hello World", "Hello World"); // 0
echo hamming("", ""); // 0
echo hamming("old father, old artificer", "of my soul the uncreated "); // 24