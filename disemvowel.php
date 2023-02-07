<?php

function disemvowel($string) {
    /*
    Trolls are attacking your comment section!

    A common way to deal with this situation is 
    to remove all of the vowels from the trolls'
    comments, neutralizing the threat.

    Your task is to write a function that takes 
    a string and return a new string with all
    vowels removed.

    Note: for this kata y isn't considered a vowel.
    */
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    return str_replace($vowels, '', $string);
}

echo disemvowel("This website is for losers LOL!"); 
// Ths wbst s fr lsrs LL!