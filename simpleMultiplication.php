<?php
function simpleMultiplication($number) {
  /*
  This kata is about multiplying a given number by eight if it is an even 
  number and by nine otherwise.
  */
    return $number % 2 === 0 ? $number * 8 : $number * 9;
}

print_r(simpleMultiplication(2)); // 16