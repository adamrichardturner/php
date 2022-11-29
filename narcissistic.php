<?php
function narcissistic(int $value): bool {
  /*
  A Narcissistic Number (or Armstrong Number) is a positive number which 
  is the sum of its own digits, each raised to the power of the number 
  of digits in a given base. In this Kata, we will restrict ourselves 
  to decimal (base 10).

  E.G: 1^3 + 5^3 + 3^3 = 1 + 125 + 27 = 153 // true - this is a narcissistic number
  */

  // Store in exponent the exponent to raise our bases to (count of value as a string)
  $exponent = count(str_split(strval($value)));
  // Map $value as an array of digits in string form, raise each digit (base) to $exponent
  // Then return the sum of the mapped values and if it equals original $value we have a 
  // narcissistic number...
  return array_sum(array_map(fn($el): int => pow($el, $exponent), str_split(strval($value)))) === $value;
}

print_r(narcissistic(153)); // true
print_r(narcissistic(7)); // true
print_r(narcissistic(153)); // true