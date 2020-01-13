<?php

  function countingValleys($n, $s) {

    $valley = 0; // Starts at sea level
    $count = 0;

    for ( $i=0; $i<$n; $i++ ) {

      if ( $s[$i] === 'U' ) {

        $valley++;

        if ( $valley === 0 ) $count++;


      } else $valley--;

      

    }

    print_r( $count );
    echo "\n";

    return $count;


  }


  $s = "";
  $n = readline( "Enter Size - " );

  for ( $i=0; $i<$n; $i++ ) $s = $s . readline( "Direction ( U, D ) - " );

  print_r( $s );
  echo "\n";

  $valley = countingValleys( $n, $s );



?>