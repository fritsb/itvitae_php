<?php
// code from: https://www.sitepoint.com/packaging-your-apps-with-phar/
//
// This scripts creates the .phar-file which can be used by other scripts
// command line: php createphar.php, or in your web browser
// make sure you have write permission for $buildRoot
$srcRoot = "src";
$buildRoot = "build";

// Create new Phar object; outputted in $buildroot/myapp.phar 
$phar = new Phar($buildRoot . "/myapp.phar", FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, "myapp.phar");

// Adds files to Phar object
$phar["index.php"] = file_get_contents($srcRoot . "/index.php");
$phar["common.php"] = file_get_contents($srcRoot . "/common.php");

// Set default Stub; meaning which script will be executed when phar is included
$phar->setStub($phar->createDefaultStub("index.php"));

// Manual step to copy config-file to $buildRoot. 
copy($srcRoot . "/config.ini", $buildRoot . "/config.ini");
