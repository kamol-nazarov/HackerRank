<?php
  
function reverse_array( $arr ) {

  $new_arr = array();

  for( $i=sizeof( $arr ) - 1; $i>=0; $i-- )
      $new_arr[] = $arr[$i];

  for ( $i=0; $i<sizeof( $new_arr ); $i++ )
      print_r( $new_arr[$i] . " " );
  return $new_arr;
}

$arr = array();

$num = readline( "How big is array- " );

for( $i=0; $i<$num; $i++ )
  $arr[] = readline( $i . "- ");

reverse_array( $arr );







?>