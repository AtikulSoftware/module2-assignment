<?php
// Task 4: Fibonacci Series printing using a Function

// Function to print the first n Fibonacci numbers
function printFibonacci($n) {
    $first = 0;
    $second = 1;

    // Check if n is less than or equal to 0
    if ($n <= 0) {
        echo "Invalid input. Please provide a positive integer.";
        return;
    }

    // Print the first two Fibonacci numbers
    echo "$first $second ";

    // Generate and print the rest of the Fibonacci numbers
    for ($i = 2; $i < $n; $i++) {
        $next = $first + $second;
        echo "$next ";
        $first = $second;
        $second = $next;
    }
}

// Call the function and print the first 15 Fibonacci numbers
printFibonacci(15);
