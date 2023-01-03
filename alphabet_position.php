<?php
function alphabet_position(string $s): string {
    /*
    In this kata you are required to, given a string, replace every 
    letter with its position in the alphabet.

    If anything in the text isn't a letter, ignore it and don't return it.

    "a" = 1, "b" = 2, etc.
    */

    // Store in $alpha the alphabet as an array
    $alpha = str_split('abcdefghijklmnopqrstuvwxyz');
    // Store in $nums our indexes of chars in $s in relation to $alpha
    $nums = [];
    // For each char in $s
    for ($i = 0; $i < strlen($s); $i++) {
        // If the char lowercased is in $alpha...
        if (in_array(strtolower($s[$i]), $alpha)) {
            // Push to $nums the index of that char in $alpha
            array_push($nums, array_search(strtolower($s[$i]), $alpha));
        } else {
            // Else just continue and skip the value, it is not alphabetical
            continue;
        }
    }
    // Return each value in $nums incremented by 1 to deal with 0 indexing
    // as a string
    return implode(' ', array_map(fn($value) => $value += 1, $nums));
}

print_r(alphabet_position("The sunset sets at twelve o' clock."));
// 20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11