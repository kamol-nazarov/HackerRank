<?php

function upToTen( $n ) {

  for ( $i=1; $i<=10; $i++ ) {

    $result = $i * $n;
    print_r( "{$n} x {$i} = {$result}\n");

  }

  return;

}

$n = 4;

upToTen( $n );

?>