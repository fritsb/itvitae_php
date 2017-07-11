<?php
/* Code based on: https://abdussamad.com/archives/550-Reading-from-standard-input-and-writing-to-standard-output-or-standard-error-using-PHP.html 
 * 
 */ 


// open handler for standard output stream 
$handle = fopen( 'php://stdout', 'w' ) ;  
// write data to handler; outputs to your screen
fwrite( $handle, "Hello World! \n" );
// close handler
fclose( $handle );


/* This is also possible (so, without a handler):
fwrite( STDOUT, "Hello World! \n" );
*/



?>