<?php

function is_divisible($n, $x, $y) {
  /*
  Create a function that checks if a number n is 
  divisible by two numbers x AND y. All inputs 
  are positive, non-zero numbers.
  Examples:
  1) n =   3, x = 1, y = 3 =>  true because   3 is divisible by 1 and 3
  */
  return $n % $x == 0 && $n % $y == 0;
}

echo is_divisible(12, 3, 4); // true