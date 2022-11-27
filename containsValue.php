<?php
function solution($a, $x) {
    /*
        You will be given an array a and a value x. All you need to do is check whether 
        the provided array contains the value.

        Array can contain numbers or strings. X can be either.

        Return true if the array contains the value, false if not.
    */
    return in_array($x, $a) ? true : false;
}

echo solution(array('a', 'b', 'c', 'd', 'e', "f"), "a");
echo solution(array('a', 'b', 'c', 'd', 'e', "f"), "f");
echo solution(array('a', 'b', 'c', 'd', 'e', "f"), "y");

?>