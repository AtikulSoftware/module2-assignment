<?php
// Task 3: Break on Condition

$firstFibonacci = 0;
$secondFibonacci = 1;

for ($i = 0; $i < 10; $i++) {
    // Calculate the next Fibonacci number
    $nextFibonacci = $firstFibonacci + $secondFibonacci;

    // Check if the next Fibonacci number is greater than 100
    if ($nextFibonacci > 100) {
        // Break out of the loop
        break;
    }

    // Print the current Fibonacci number
    echo $nextFibonacci . " ";

    // Update the Fibonacci sequence
    $firstFibonacci = $secondFibonacci;
    $secondFibonacci = $nextFibonacci;
}