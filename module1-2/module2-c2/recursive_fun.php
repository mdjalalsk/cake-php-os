<?php
function factorial($n) {
    if ($n <= 1) {
        return 1; // Base case: factorial of 0 and 1 is 1
    } else {
        return $n * factorial($n - 1); // Recursive case: n! = n * (n-1)!
    }
}

// Example usage:
$number = 5;
$result = factorial($number);
echo "The factorial of $number is $result";
