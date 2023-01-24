<?php

function replaceAll($string) {
    /*
    Complete the function/method so that it returns the url 
    with anything after the anchor (#) removed.

    Examples
    "www.codewars.com#about" --> "www.codewars.com"
    "www.codewars.com?page=1" -->"www.codewars.com?page=1"
    */

    // If $string contains '#' then return a substring of it
    // from 0 index to the index of the anchor and no more
    // Else, just return $string unchanged
    return str_contains($string, '#') ? 
           substr($string, 0, strpos($string, '#')) : 
           $string;
}

echo replaceAll("http://www.uol.com.br#teste");
// "http://www.uol.com.br"