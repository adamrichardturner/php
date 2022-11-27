<?php

function positive_sum($arr) {
  /*
  You get an array of numbers, return the sum of all of the positives ones.

  Example [1,-4,7,12] => 1 + 7 + 12 = 20

  Note: if there is nothing to sum, the sum is default to 0.
  */

  $total = 0;
  for ($i = 0; $i < count($arr); $i++) {
    $arr[$i] > 0 ? $total += $arr[$i] : null;
  }
  return $total;
}

print_r(positive_sum([1,-4,7,12])); // 20