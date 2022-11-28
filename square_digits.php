<?php

function square_digits($num): int {
  /*
    Welcome. In this kata, you are asked to square every digit of a number and concatenate them.

    For example, if we run 9119 through the function, 811181 will come out, because 92 is 81 and 12 is 1.

    Note: The function accepts an integer and returns an integer
  */
  $split_num = str_split(strval($num));
  $squared = '';
  for ($i = 0; $i < count($split_num); $i++) {
    $squared = $squared . $split_num[$i] ** 2;
  }
  return intval($squared);
}

print_r(square_digits(9119)); // 811181