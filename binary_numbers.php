<?php



$stdin = fopen("php://stdin", "r");
$top = 0;
$current = 0;

$binary = strval( decbin( readline( "Give me a number - " ) ) );

for( $i=0; $i<strlen( $binary ); $i++ ) {

    if( $binary[$i] === "1" ) {
        $current++;
        if ( $current > $top )
            $top = $current;
    } else {
        $current = 0;
    }
}

print_r( $top );

fscanf($stdin, "%d\n", $n);

fclose($stdin);


?>