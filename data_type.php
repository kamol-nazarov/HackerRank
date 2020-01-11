<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Declare second integer, double, and String variables.

$d = doubleval( $d );


// Read and save an integer, double, and String to your variables.

    $user_int = intval( readline( "Give me a number - " ) );
    $user_double = doubleval( readline( "Give me a double - " ) );
    $user_string = readline( "Give me a string - " );

// Print the sum of both integer variables on a new line.

    print_r( intval( $user_int + $i ) );
    echo "\n";


// Print the sum of the double variables on a new line.

    print_r( doubleval( $user_double + $d ) );
    echo "\n";

// Concatenate and print the String variables on a new line

    print_r( $s . $user_string );
    echo "\n";

// The 's' variable above should be printed first.

fclose($handle);
?>