<?php
/* Code based on http://www.phpbuilder.com/columns/peter_shaw20090211.php3?page=2
 * 
 * Run script via command line like: 
 * ls -al ../ | php -q filename.php
 */

  // Open PHP's standard input stream
  $input_stream = fopen("php://stdin","r");

  // Array to store the received data
  $lines = array();

  // Loop & process while we receive lines
  while($line = fgets($input_stream,4096)) // Note 4k per line, should be ok for most purposes
  {
    //Store each line in the array, ensuring we chop off the line ends
    $lines[] = trim($line);
  }
  // close input stream
  fclose($input_stream);

  // print results on screen
  print_r($lines);

?>


