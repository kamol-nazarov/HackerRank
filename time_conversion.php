<?php

function timeConversion( $s ) {

  return date("H:i:s", strtotime( $s ) );

}

$s = "07:05:45PM";

print_r( timeConversion( $s ) );
echo "\n";




?>