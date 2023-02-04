<?php
function nbDig($n, $d) {
    /*
    Take an integer n (n >= 0) and a digit d (0 <= d <= 9) as an integer.

    Square all numbers k (0 <= k <= n) between 0 and n.

    Count the numbers of digits d used in the writing of all the k**2.

    Call nb_dig (or nbDig or ...) the function taking n and d as parameters and returning this count.

    Examples:
    n = 10, d = 1 
    the k*k are 0, 1, 4, 9, 16, 25, 36, 49, 64, 81, 100
    We are using the digit 1 in: 1, 16, 81, 100. The total count is then 4.
    */

    // Store our count of the occurences of $d within the writing of k**2
    $count = 0;
    // Store as an array all numbers squared in range 0 to $n
    $squared = array_map(fn($x) => pow($x, 2), range(0, $n));
    // For each value in $squared...
    foreach ($squared as $value) {
        // First convert $value into a string
        $value = strval($value);
        // Then loop through each character in $value
        for ($i = 0; $i < strlen($value); $i++) {
            // If the character in $value is equal to $d then increment $count
            $value[$i] == $d ? $count++ : 0;
        }
    }
    return $count;
}

print_r(nbDig(14167, 9)); // 10808