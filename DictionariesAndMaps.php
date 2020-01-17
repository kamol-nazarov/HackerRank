<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$n = intval(fgets($_fp));
$arr = array();
$arrays = array();

for ( $i=0; $i<$n; $i++ )
{

    $arr[] = fgets($_fp);
    $arrays[] = explode( " ", $arr[$i] );
    
}

while ( feof($_fp) !== true ) {

    $found = "Not found";
    $name = trim(fgets($_fp));

    for( $j=0; $j<$n; $j++ ) {
        
        if ( $name === $arrays[$j][0] ) {
            $found = trim($arrays[$j][0]) . "=" . trim($arrays[$j][1]);
        } 

    }

    print_r($found);
    echo "\n";

}

?>