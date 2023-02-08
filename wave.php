<?php

function wave($people) {
    /*
    In this simple Kata your task is to create a function that 
    turns a string into a Mexican Wave. You will be passed a 
    string and you must return that string in an array where 
    an uppercase letter is a person standing up. 
    
    E.G
    wave("hello") => {"Hello", "hEllo", "heLlo", "helLo", "hellO"}
    */

    // Store in $arr our final mexican wave
    $arr = [];
    // Re-assign $people string to all lowercase
    $people = strtolower($people);
    // For each $index and $person (char) in $people as an array
    foreach(str_split($people) as $i=>$person) {
        // If $person is a space, do nothing
        // Else, push to $arr everything from index 0 to $i 
        // Concatenate with uppercase $person and the remainder
        $person == ' ' ? 0 
                       : array_push($arr, substr($people, 0, $i) . 
                       strtoupper($person) . 
                       substr($people, $i+1));
    }
    // If people isn't empty, return $arr, else return emptry array
    return $people ? $arr : [];
}

print_r(wave("Two words")); // ["Hello", "hEllo", "heLlo", "helLo", "hellO"]