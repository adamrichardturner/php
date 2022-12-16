<?php

function replace(string $s): string {
  // Replace all vowel to exclamation mark in the sentence. aeiouAEIOU is vowel.

    // Store in $vowels our lower-case and upper-case vowels
    $vowels = str_split('aeiouAEIOU');
    // Replace all instances of vowels with !
    return str_replace($vowels, "!", $s);
}

print_r(replace("aeiou")); // !!!!!