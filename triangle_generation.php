<?php

function staircase($n) {

$i = 0;
$h = 0;

while ( $i < $n ) {
  
  for ( $a = 0; $a < $n - ( $i + 1 ); $a++ ) {

    echo " ";
    $h = $a;

  }

  for ( $a = $h + 1; $a < $n; $a++ )
    echo "#";

  if ( $i === $n-1)
    echo "#";

  echo "\n";

  $i++;

}

return;

};

print_r( staircase( 20 ) );


?>