<?php


function birthdayCakeCandles($ar) {

  $size = sizeof( $ar );

  $tallest = 0;
  $count = 1;

  for ( $i=0; $i < $size; $i++ ) {

    if ( $tallest < $ar[$i] ) {
      
      $tallest = $ar[$i];
      $count = 1;

      print_r( "NEW TALLEST : {$i} - {$ar[$i]}");
      echo "\n";
      print_r( "NEW COUNT : {$count}");
      echo "\n";

      continue;

    }

    if ( $tallest === $ar[$i] ) {

      $count++;

      print_r( "TALLEST EQUAL : {$i} - {$ar[$i]}" );
      echo "\n";
      print_r( "COUNT : {$count}" );
      echo "\n";
      
      continue;

    }

  }

  print_r( $count );
  echo "\n";

  return;

}



$ar = array ( 82, 49, 82, 82, 41, 82, 15, 63, 38, 25 );

birthdayCakeCandles( $ar );








?>