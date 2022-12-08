<?php

function is_uppercase($str) {
  // Create a method to see whether the string is ALL CAPS.
  if(is_null($str)) {
        return false;
  } else if (strlen($str) <= 0) {
    return true;
  } else if (!$str) {
        echo $str;
    return true;
  } else {
    return ctype_upper(str_replace(' ', '', $str)) ? true : false;
  }
}

print_r(is_uppercase(null));
print_r(is_uppercase('HELLO I AM DONALD'));
print_r(is_uppercase(false));