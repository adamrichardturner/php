<?php

function spinWords(string $str): string {
    /*
    Write a function that takes in a string of one or more words, 
    and returns the same string, but with all five or more letter 
    words reversed (Just like the name of this Kata). Strings passed 
    in will consist of only letters and spaces. Spaces will be included 
    only when more than one word is present.

    E.G

    spinWords( "Hey fellow warriors" ) => returns "Hey wollef sroirraw" 
    */

    // Split the string into an array on spaces and iterate over it with map
    // If the length of each word is >= 5, reverse the word
    // Else just return the word
    // Join as a string with space delimiter using implode

    return implode(' ', array_map(fn($value): string => strlen($value) >= 5 ? strrev($value) : $value, explode(' ', $str)));
}

print_r(spinWords("Hey fellow warriors")); // Hey wollef sroirraw