<?php


function birthdayCakeCandles($ar) {

  $size = sizeof( $ar );

  $tallest = 0;
  $count = 0;

  for ( $i=0; $i < $size; $i++ ) {

    if ( $tallest < $ar[$i] ) {
      
      $tallest = $ar[$i];
      $count = $i;

    }

    if ( $tallest === $ar[$i] ) continue;

    $count++;

  }

  print_r( $count );
  echo "\n";

  return;

}



$ar = array ( 82, 49, 82, 82, 41, 82, 15, 63, 38, 25 );

birthdayCakeCandles( $ar );








?>