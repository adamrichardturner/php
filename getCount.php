<?php

function getCount($str) {
    /*
    Return the number (count) of vowels in the given string.

    We will consider a, e, i, o, u as vowels for this Kata (but not y).

    The input string will only consist of lower case letters and/or spaces.
    */

    // Store our vowels here
    $vowels = "aeiou";
    // Count how many vowels here
    $vowelsCount = 0;
    // For each char in $str
    for ($i = 0; $i < strlen($str); $i++) {
        // If the char is in $vowels, increment $vowelsCount
        str_contains($vowels, $str[$i]) ? $vowelsCount++ : null;
    }
  return $vowelsCount;
}

echo getCount("abracadabra"); // 5