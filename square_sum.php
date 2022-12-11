<?php

function square_sum($numbers) : int {
  /*
  Complete the square sum function so that it squares each 
  number passed into it and then sums the results together.

    For example, for [1, 2, 2] it should return 9 
    because 1^2 + 2^2 + 2^2 = 9.
  */
    return array_sum(array_map(fn($value): int => $value ** 2, $numbers));
}

print_r(square_sum([0, 3, 4, 5])); // 50