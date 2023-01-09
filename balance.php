<?php

function balance(string $l, string $r): string {
    /*
    Each exclamation mark's weight is 2; each question mark's weight is 3. 
    Putting two strings left and right on the balance - are they balanced?

    If the left side is more heavy, return "Left"; if the right side is 
    more heavy, return "Right"; if they are balanced, return "Balance".
    */

    // Store in $left and $right the score weighted appropriately
    $left = substr_count($l, "!") * 2 + substr_count($l, '?') * 3;
    $right = substr_count($r, "!") * 2 + substr_count($r, '?') * 3;
    // Compare $left and $right, returning the correct string
    if ($left > $right) {
        return "Left";
    } else if ($right > $left) {
        return "Right";
    }
    return "Balance";
}

print_r(balance("!!", "??")); // Right
print_r(balance("!??", "?!!")); // Left
print_r(balance("!?!!", "?!?")); // Left
print_r(balance("!!???!????", "??!!?!!!!!!!")); // Balance