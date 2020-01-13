<?php

function jumpingOnClouds($c) {

  $count = 0;
  $i = 0;

  while ( $i<sizeof( $c ) - 1 ) {

    if ( ( $i + 2 < sizeof( $c ) ) && ( $c[$i+2] != 1 ) ) {

      $count++;
      $i += 2;

    } else {

      $count++;
      $i++;

    }

  }

  print_r( $count );
  echo "\n";

  return $count;

}


// $n = readline( "size - " );
// $c = array();

// for ( $i=0; $i<$n; $i++ ) $c[] = readline( "Entry ( 0, 1 ) - " );

$c = array( 0, 0, 1, 0, 0, 0, 1, 0, 0 );

print_r( $c );
echo "\n";

$result = jumpingOnClouds( $c );








?>