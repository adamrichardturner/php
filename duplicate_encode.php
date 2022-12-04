<?php

function duplicate_encode($word){
	/*
    The goal of this exercise is to convert a string to a new 
    string where each character in the new string is "(" if 
    that character appears only once in the original string, 
    or ")" if that character appears more than once in the 
    original string. Ignore capitalization when determining 
    if a character is a duplicate.
    */

    // Store in $str our final string
    $str = '';
    // For each char as lowercase in $word...
    for ($i = 0; $i < count(str_split(strtolower($word))); $i++) {
        // If the char appears in $word more than once...
        if (substr_count(strtolower($word), strtolower($word[$i])) > 1) {
            // Concatenate to $str the ')' char
            $str = $str . ')';
        } else {
            // Else concatenate the '('
            $str = $str . '(';
        }
    }
    return $str;
}

print_r(duplicate_encode('recede')); // "()()()"
echo "\n";
print_r(duplicate_encode('Success')); // ")())())"