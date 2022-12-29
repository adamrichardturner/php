<?php

function checkForFactor($base, $factor) {
    /*
    This function should test if the factor is a factor of base.

    Return true if it is a factor or false if it is not.
    */
    return $base % $factor === 0 ? true : false;
}

print_r(checkForFactor(10, 2));