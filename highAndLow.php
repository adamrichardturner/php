<?php

function highAndLow($numbers) {
    /*
    In this little assignment you are given a string 
    of space separated numbers, and have to return the 
    highest and lowest number.
    */
    $ints = array_map(fn($n) => intval($n), explode(' ', $numbers));
    return strval(max($ints)) . ' ' . strval(min($ints));
}

echo highAndLow("1 2 3 4 5");  // return "5 1"
echo highAndLow("1 2 -3 4 5"); // return "5 -3"
echo highAndLow("1 9 3 4 -5"); // return "9 -5"