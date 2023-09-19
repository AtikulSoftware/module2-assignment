<?php
// Task 1: Looping with Increment using a Function

// Using a for loop
function printEvenNumbers($start, $end, $step) {
    if ($start % 2 !== 0) {
        // Increment start if it is odd
        $start++;
    }

    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

// Calling the function to print even numbers from 1 to 20 with a step of 2
printEvenNumbers(1, 20, 2);

// just for new line
echo "\n";

// Using a while loop:
function printEvenNumbersWhile($start, $end, $step) {
    if ($start % 2 !== 0) {
        // Increment start if it is odd
        $start++;
    }

    $i = $start;
    while ($i <= $end) {
        echo $i . " ";
        $i += $step;
    }
}

// Calling the function to print even numbers from 1 to 20 with a step of 2 using while loop
printEvenNumbersWhile(1, 20, 2);

// just for new line
echo "\n";

// Using a do-while loop:
function printEvenNumbersDoWhile($start, $end, $step) {
    if ($start % 2 !== 0) {
        $start++; // Increment start if it is odd
    }

    $i = $start;
    do {
        echo $i . " ";
        $i += $step;
    } while ($i <= $end);
}

// Calling the function to print even numbers from 1 to 20 with a step of 2 using do-while loop
printEvenNumbersDoWhile(1, 20, 2);