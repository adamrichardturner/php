<?php

function detect_pangram($string) { 
    /*
    A pangram is a sentence that contains every single letter of 
    the alphabet at least once. For example, the sentence "The 
    quick brown fox jumps over the lazy dog" is a pangram, 
    because it uses the letters A-Z at least once (case is irrelevant).

    Given a string, detect whether or not it is a pangram. 

    Return True if it is, False if not. Ignore numbers and punctuation.
    */

    // Store in $alpha all the characters of the alphabet in lowercase
    $alpha = array_merge(range('a', 'z'));
    // Store within $in_alpha an array of chars in $string also in $alpha
    $in_alpha = [];
    // For each char ($value) in $string with no spaces as an array...
    foreach(str_split(str_replace(' ', '', $string)) as $value) {
        // Re-assign $value to lowercase to avoid case issues
        $value = strtolower($value);
        // If $value is within $in_alpha skip it and move on
        if (in_array($value, $in_alpha)) {
            continue;
        // Else if it is not already within $in_alpha...
        } else {
            // Check if it is in $alpha, if so push to $in_alpha the $value
            in_array($value, $alpha) ? array_push($in_alpha, $value) : null;
        }
    }
    // If the count of values in $alpha and $in_alpha are the same
    // we have a pangram and it will return true, or false otherwise.
    return count($alpha) === count($in_alpha);
}

echo detect_pangram("The quick brown fox jumps over the lazy dog."); // true