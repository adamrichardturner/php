<?php
print_r(find_even_index(array(1,2,3,4,3,2,1))); // 3
print_r(find_even_index([1,100,50,-51,1,1])); // 1
print_r(find_even_index([1,2,3,4,5,6])); //-1
print_r(find_even_index([20,10,30,10,10,15,35])); // 3
print_r(find_even_index([20,10,-80,10,10,15,35])); //0
print_r(find_even_index([10,-80,10,10,15,35,20])); // 6