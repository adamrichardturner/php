<?php

function uniqueInOrder($iterable){
    /*
    Implement the function unique_in_order which takes as argument a sequence and 
    returns a list of items without any elements with the same value next to each 
    other and preserving the original order of elements.

    For example:

    uniqueInOrder("AAAABBBCCDAABBB") == {'A', 'B', 'C', 'D', 'A', 'B'}
    uniqueInOrder("ABBCcAD")         == {'A', 'B', 'C', 'c', 'A', 'D'}
    uniqueInOrder([1,2,2,3,3])       == {1,2,3}
    */

    // Store in $unique our unique values
    $unique = [];
    // Store in $seen a temporary variable to track if we have already seen it
    // indicating adjacent duplicates we have already seen
    $seen = null;
    // If $iterable is an array and is empty...
    if (is_array($iterable) && empty($iterable)) {
        // Return $iterable as it is
        return $iterable;
    // Else if $iterable is an empty string, return an empty array
    } else if (is_string($iterable) && empty($iterable)) {
        return [];
    }
    // If $iterable is not iterable...
    if (!is_iterable($iterable)) {
        // Turn $iterable into an iterable array
        $iterable = str_split($iterable);
    }
    // For each value in $iterable
    foreach ($iterable as $value) {
        // If $seen is equal to $value, skip it as that will create duplicates
        if ($seen === $value) {
            continue;
        // Else, push to $unique the value and re-assign $seen to $value
        } else {
            array_push($unique, $value);
            $seen = $value;
        }
    }
    // Return the $unique values
    return $unique;
}

print_r(uniqueInOrder("AAAABBBCCDAABBB")); // ['A', 'B', 'C', 'D', 'A', 'B'] 
print_r(uniqueInOrder("ABBCcAD")); // ['A', 'B', 'C', 'c', 'A', 'D']
print_r(uniqueInOrder([1,2,2,3,3])); // [1,2,3]