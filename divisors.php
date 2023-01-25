<?php
function divisors($n) {
    /*
    Count the number of divisors of a positive integer n.

    Random tests go up to n = 500000.

    Examples (input --> output)
    4 --> 3 (1, 2, 4)
    5 --> 2 (1, 5)
    12 --> 6 (1, 2, 3, 4, 6, 12)
    30 --> 8 (1, 2, 3, 5, 6, 10, 15, 30)
    Note you should only return a number, the count of divisors. 
    The numbers between parentheses are shown only for you to 
    see which numbers are counted in each case.
    */

    // Return count of range 1 to $n filtered where $n modulo $el leaves 0
    return count(array_filter(range(1, $n), fn($el) => $n % $el === 0));
}

print_r(divisors(4)); // 3
print_r(divisors(5)); // 2
print_r(divisors(12)); // 6
print_r(divisors(30)); // 8