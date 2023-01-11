<?php

function find_missing_letter(array $array): string {
  /*
  Write a method that takes an array of consecutive (increasing) 
  letters as input and that returns the missing letter in the array.

  You will always get an valid array. And it will be always exactly
  one letter be missing. The length of the array will always be 
  at least 2.

  The array will always contain letters in only one case.

  Example:

  ['a','b','c','d','f'] -> 'e'
  ['O','Q','R','S'] -> 'P'
  */

  // Store in $alpha our alphabet as an array
  $alpha = str_split('abcdefghijklmnopqrstuvwxyz');
  // Store in $arr our input $array all in lowercase as an array
  $arr = str_split(strtolower(implode($array)));
  // Store in $values the alphabet indexes of each letter in $arr
  $values = [];
  // Store in $target the index within $alpha of the missing letter
  $target = null;
  // For each value in $arr
  for ($i = 0; $i < count($arr); $i++) {
    // Push to $values the index of that letter in $alpha
    array_push($values, array_search($arr[$i], $alpha));
  }
  // For each value in $values
  for ($i = 0; $i < count($values) - 1; $i++) {
    // If there is a difference of 2 between adjacent values...
    if ($values[$i + 1] - $values[$i] === 2) {
      // Reassign $target to the index of the missing letter
      $target = $values[$i] + 1;
    }
  }
  return ctype_lower($array[0]) ? $alpha[$target] : strtoupper($alpha[$target]);
}

print_r(find_missing_letter(['a','b','c','d','f'])); // e
print_r(find_missing_letter(["O", "Q", "R", "S"])); // P