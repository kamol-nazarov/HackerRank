<?php

function miniMaxSum($arr) {

  $size = sizeof( $arr );

  for ( $i=0; $i<$size; $i++ ) {

    $answers = array();

    for ( $j=0; $j<$size; $j++ ) {

      if ( $j === $i ) continue;

      $answers[] += $arr[$j];
     
    }

    $size_answers = sizeof( $answers );
    $final = 0;

    for ( $k=0; $k<$size_answers; $k++ ) {

      $final += $answers[$k];

    }

    echo "\n";
    print_r( $final );
    echo "\n";
    
  }

  return;

}


$arr = array( 1, 2, 5, 7, 9 );

miniMaxSum($arr);




?>