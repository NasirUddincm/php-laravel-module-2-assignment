<?php
/*========================
        task 1
===========================*/ 

/*------------------------
        Using For Loop
------------------------*/ 
function evenNumbersUsingForLoop($start, $end, $step) {
    // Adjust the starting point to the nearest even number
    if ($start % 2 !== 0) {
        $start++;
    }

    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " for loop \n";
    }
}

// Call the function
evenNumbersUsingForLoop(1, 20, 2);


/*------------------------
        Using While Loop
------------------------*/ 
function evenNumbersUsingWhileLoop($start, $end, $step) {
    while ($start <= $end) {
        if ($start % 2 !== 0) {
            echo $start+1 . " \n";
        }
        $start += $step;
    }
}
evenNumbersUsingWhileLoop(1, 20, 2);


/*------------------------
        Using Do While Loop
------------------------*/ 
function evenNumbersUsingDoWhileLoop($start, $end, $step) {
    do {
        if ($start % 2 !== 0) {
            echo $start+1 . " \n";
        }
        $start += $step;
    } while ($start <= $end);
}
evenNumbersUsingDoWhileLoop(1, 20, 2);



/*========================
        task 2
===========================*/ 
for ($i = 1; $i <= 50; $i++) {
    if ($i % 5 == 0) {
        continue; // Skip multiples of 5
    }
    echo $i . " ";
}



/*========================
        task 3
===========================*/ 
// Function to calculate the nth Fibonacci number
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$count = 0; // Counter to keep track of generated Fibonacci numbers

for ($i = 0; $count < 100; $i++) {
    $fib = fibonacci($i);
    
    // Check if the Fibonacci number is greater than 100
    if ($fib > 100) {
        break; // Exit the loop if it's greater than 100
    }
    
    echo $fib . " "; // Print the Fibonacci number
    $count++;
}


/*========================
        task 4
===========================*/ 
// Function to generate and print the first n Fibonacci numbers
function generateFibonacci($n) {
    $fibonacci = array();

    // First two numbers in the Fibonacci series
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    // Generate the remaining Fibonacci numbers
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    // Print the Fibonacci numbers
    for ($i = 0; $i < $n; $i++) {
        echo $fibonacci[$i];
        if ($i < $n - 1) {
            echo ", ";
        }
    }
}

// Call the function to print the first 15 Fibonacci numbers
generateFibonacci(15);



