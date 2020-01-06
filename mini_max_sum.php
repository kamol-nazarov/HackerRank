<?php

function miniMaxSum($arr) {

  $size = sizeof( $arr );

  $smallest = array( 0, $arr[0] );
  $biggest = array( 0, $arr[0] );
  $result = array ( 0, 0 );

  for ( $i=0; $i < $size; $i++ ) {

    if ( $smallest[1] > $arr[$i] ) {

      $smallest[0] = $i;
      $smallest[1] = $arr[$i];

      print_r( "NEW SMALLEST : {$smallest[0]} {$smallest[1]} ");
      echo "\n";

    }
    
    if ( $biggest[1] < $arr[$i] ) {

      $biggest[0] = $i;
      $biggest[1] = $arr[$i];

      print_r( "NEW BIGGEST : {$biggest[0]} {$biggest[1]}");
      echo "\n";

    }

  } 
  
  
  for ( $i=0; $i < $size; $i++ ) {

    if ( $i === $biggest[0] ) {

      print_r( "FOUND BIGGEST : {$arr[$i]} " );
      echo "\n";

      continue;

    }

    $result[0] += $arr[$i];

  }

  for ( $i=0; $i < $size; $i++ ) {

    if ( $i === $smallest[0] ) {  

      print_r( "FOUND SMALLEST : {$arr[$i]} " );
      echo "\n";

      continue;    

    }

    $result[1] += $arr[$i];

  }


  print_r( "{$result[0]} {$result[1]}");
  echo "\n";

  return;
  
}


$arr = array( 1, 2, 3, 4, 5 );

miniMaxSum($arr);




?>