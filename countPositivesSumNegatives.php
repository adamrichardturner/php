<?php

function countPositivesSumNegatives($input) {
    // If the input is null or an empty array, return empty array
    if ($input === null || count($input) === 0) {
        return [];
    } else {
        // Store in positives the count of positive numbers
        $positives = 0;
        // Store in negatives the sum total of negative numbers
        $negatives = 0;
        // For each value within $input
        foreach ($input as $value) {
            // If $value above 0, increment positives count
            // Else, add to $negatives the value
            $value > 0 ? $positives++ : $negatives += $value;
        }
        return [$positives, $negatives];
    }
}

print_r(countPositivesSumNegatives([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15])); // [10, -65]