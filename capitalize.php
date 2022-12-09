<?php
function capitalize($s) {
  /*
  Given a string, capitalize the letters that occupy even indexes and odd indexes separately, 
  and return as shown below. Index 0 will be considered even.

  For example, capitalize("abcdef") = ['AbCdEf', 'aBcDeF']. See test cases for more examples.

  The input will be a lowercase string with no spaces.
  */

  // Store in these two variables the end representations where even indexes are capital letters
  // and odd indexes are capital letters
  $strEven = '';
  $strOdd = '';
  // For each char in $s...
  for ($i = 0; $i < count(str_split($s)); $i++) {
    // If the index is even...
    if ($i % 2 === 0) {
        // Concatenate to $strEben the char in uppercase
        $strEven = $strEven . strtoupper($s[$i]);
        // Concatenate to $strOdd the char with no changes
        $strOdd = $strOdd . $s[$i];
    } else {
        // Else with odd indexes....
        // Concatenate to $strOdd the uppercase char
        $strOdd = $strOdd . strtoupper($s[$i]);
        // Concatenate to $strEven the char with no changes
        $strEven = $strEven . $s[$i];
    }
  }
    return [$strEven, $strOdd];
}

print_r(capitalize("abcdef")); // ['AbCdEf', 'aBcDeF']