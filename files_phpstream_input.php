<?php
/* This script should be called by files_phpstream_input_form.php  
 * 
 * php://input is a read-only stream that allows you to read raw data from the request body
 * more on http://php.net/manual/en/wrappers.php.php  
 */

// Retrieve content from php's input stream 
$input = file_get_contents('php://input'); 

// var_dump of php's input stream
var_dump($input);

// parses the input into an array 
parse_str($input, $params); 

// print array on screen
print_r($params);


?>