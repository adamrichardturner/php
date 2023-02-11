<?php
function sumLeft($array) {
    $res = [];
    for($i = 1; $i < count($array); $i++) {
        $sum = 0;
        for($j = $i-1; $j >= 0; $j--) {
            $sum += $array[$j];
        }
        array_push($res, $sum);
    }
    return $res;
}
function find_even_index($arr) {
    /*
    You are going to be given an array of integers. 
    Your job is to take that array and find an index N where 
    the sum of the integers to the left of N is equal to the
    sum of the integers to the right of N. If there is no 
    index that would make this happen, return -1.
    */

    $left = sumLeft($arr);
    $right = sumLeft(array_reverse($arr));
    $res = [];
    for ($i = 0; $i < count($left) -1; $i++) {
        if($left[$i] === $right[$i]) {
            array_push($res, $i);
        }
    }
    echo "res";
    print_r($res);
    if (end($left) === 0 && max($arr) !== 0) {
        return count($arr) -1;
    } else if (end($right) === 0 && max($arr) !== 0) {
        echo 'hi';
        return 0;
    } else if (max($arr) === 0) {
        return 0;
    }
    if ($left === $right && count($arr) > 2) {
        echo 'hey';
        $mid = floor((count($arr) -1) / 2);
        return intval(number_format($mid, 0));
    } else if (count($res) >= 1) {
        echo 'pie';
        print_r($res);
        return $res[0] === 0 ? 1 : $res[0]+1;
    } 
    return count($arr) === 1 ? 0 : -1;
}

print_r(find_even_index(array(1,2,3,4,3,2,1))); // 3
print_r(find_even_index([1,100,50,-51,1,1])); // 1
print_r(find_even_index([1,2,3,4,5,6])); //-1
print_r(find_even_index([20,10,30,10,10,15,35])); // 3
print_r(find_even_index([20,10,-80,10,10,15,35])); //0
print_r(find_even_index([10,-80,10,10,15,35,20])); // 6
print_r(find_even_index([0,0,0,0,0])); //-1
print_r(find_even_index([8, 8]));