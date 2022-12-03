<?php

function findShort($str) {
    /*
    Simple, given a string of words, return the 
    length of the shortest word(s).
    */
    return min(array_map(fn($el): int => strlen($el), explode(" ", $str)));
}

print_r(findShort("bitcoin take over the world maybe who knows perhaps")); // 3