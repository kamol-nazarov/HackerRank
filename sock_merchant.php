<?php

  function sockMerchant( $n, $ar ) {

    $temp = $ar;
    $count = 0;
    // $matched = array();

    for ( $i=0; $i<$n; $i++ ) {

      for ( $j=0; $j<$n; $j++ ) {

        if ( $i != $j && $temp[$i] === $temp[$j] ) {

          unset( $temp[$j] );
          unset( $temp[$i] );
    
          $temp = array_values( $temp );
    
          $count++;

          $i = 0;
    
          $n -= 2;
            
          break;

        }

      }
      
    }



    print_r( $count );
    echo "\n\n";
    // print_r( $matched );
    // echo "\n\n";

    return $count;

  }

  // $arr = array();
  // $n = readline( "Size of array - " );
  
  // for ( $i=0; $i<$n; $i++ )
  //   $arr[] = intval( readline( "Insert Number - " ) );

  // print_r( $arr );
  // echo "\n";

  $arr = array( 10, 20, 20, 10, 10, 30, 50, 10, 20 );
  $n = 9;

  $socks = sockMerchant( $n, $arr );


?>