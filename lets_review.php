<?php

function evenDivided( $f ) {

  $temp = array();
  $size = sizeof( $f );

  for ( $i=0; $i<$size; $i++ ) {

    $size_of_word = strlen( $f[$i] );

    $temp[] = array ( 
      
      0 => "",
      1 => ""

    );

    for ( $j=0; $j<$size_of_word; $j++ ) {

      if ( $j % 2 === 0 )
        $temp[$i][0] = $temp[$i][0] . $f[$i][$j];
      else $temp[$i][1] = $temp[$i][1] . $f[$i][$j];

    }

    print_r( "{$temp[$i][0]} {$temp[$i][1]}\n");

  }

  return $temp;

}

$f = array();

$size = intval( readline( "size - " ) );

for ( $i=0; $i<$size; $i++ )
  $f[] = readline( "Word - " );

evenDivided( $f );


?>