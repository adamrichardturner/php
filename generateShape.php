<?php

function generateShape($int) {
    /*
    I will give you an integer. Give me back a shape that 
    is as long and wide as the integer. The integer will 
    be a whole number between 1 and 50.
    */

    // Store in $shape our final square
    $shape = "";
    // For each index from 1 to $int**2 inclusive...
    for ($i = 1; $i <= pow($int, 2); $i++) {
        if($i % $int == 0 && $i != pow($int, 2)) {
        // If $i modulo $int == 0 we are at end of the line
        // so concatenate a '+' with line-break 
            $shape .= "+\n";
        } else {
            // Else just add the '+'
            $shape .= "+";
        }
    }
    return $shape;
}

echo generateShape(8);
/*
++++++++
++++++++
++++++++
++++++++
++++++++
++++++++
++++++++
++++++++
*/