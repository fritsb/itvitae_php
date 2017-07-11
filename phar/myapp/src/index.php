<?php
// code from: https://www.sitepoint.com/packaging-your-apps-with-phar/

// require common.php in the same phar-file 
require_once "phar://myapp.phar/common.php";

// read config.ini (not in phar-file)
$config = parse_ini_file("config.ini");

// run static method run with config-file
AppManager::run($config);
