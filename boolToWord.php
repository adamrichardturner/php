<?php

function boolToWord($bool){
    /*
    Complete the method that takes a boolean value 
    and return a "Yes" string for true, or a "No" 
    string for false.
    */
    return $bool ? "Yes" : "No";
}

echo boolToWord(true); // Yes
echo boolToWord(false); // No