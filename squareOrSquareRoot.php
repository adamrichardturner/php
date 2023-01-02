<?php
function squareOrSquareRoot($array) {
    /*
    Write a method, that will get an integer array as parameter and will process every number from this array.

    Return a new array with processing every number of the input-array like this:
    If the number has an integer square root, take this, otherwise square the number.
    */
    return array_map(fn($value): int => sqrt($value) == floor(sqrt($value)) ? sqrt($value) : $value ** 2, $array);
}

print_r(squareOrSquareRoot([4, 3, 9, 7, 2, 1])); // [ 2, 9, 3, 49, 4, 1 ]