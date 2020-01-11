<?php

function shortestSubstring($s) {

  $size = strlen( $s );
  $count = array();
  $characters = array();
  $used = array();
  $used_already = false;

  $x = 0;
  
  for ( $i=0; $i<$size; $i++ ) {

    $used_already = false;

    print_r( $s[$i] );

    if ( $i === 0 ) {

        $count[] = 1;
        $used[] = $s[$i];
        print_r( "first one \n" );
        continue;

    }

    for ( $j=0; $j<sizeof( $used ); $j++ ) {

      if ( $s[$i] === $used[$j] ) {

        print_r( "found repeating - {$i} \n" );
        $x++;
        $count[] = 1;
        $used = array();
        $used_already = true;
        break;

        }

    }

    if ( $used_already ) continue;

      $used[] = $s[$i];
      $count[$x] = $count[$x] + 1;  

  }

  $lowest = $count[0];

  for ( $i=0; $i<sizeof( $count ); $i++ ) {

      if ( $lowest > $count[$i] && $count[$i] > 1 ) $lowest = $count[$i];
          
  }

  return $lowest;

}

print_r(shortestSubstring( "bab" ) );



?>