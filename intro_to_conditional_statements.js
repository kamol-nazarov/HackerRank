function isOdd(A) {
  // if ( N % 2 === 0 ) {

  //   if ( N > 6 && N < 20 ) console.log( "Weird" );
  //   else console.log( "Not Weird" );

  // } else console.log( "Weird" );

  if (A % 2 != 0 || (A > 5 && A < 21)) console.log("Weird");
  else console.log("Not Weird");
}

const A = 20;

isOdd(A);
