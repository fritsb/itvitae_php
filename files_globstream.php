<?php
// Example from: http://php.net/manual/en/wrappers.glob.php 

// Loop over all *.php files in /Users/streeksoft/Sites/theorie/ directory
// and print the filename and its size
$dir = "/Users/streeksoft/Sites/theorie";
$it = new DirectoryIterator("glob://$dir/*.*");
echo "PHP-files in directory $dir".PHP_EOL;
foreach($it as $f) {
    printf("%s: %.1FK\n", $f->getFilename(), $f->getSize()/1024);
}

echo PHP_EOL."-----------".PHP_EOL;


// Loop over all *.php files from root
// and print the filename and its size

$dir = "/Library/WebServer/Documents";
echo "PHP-files in directory $dir".PHP_EOL;
$it = new DirectoryIterator("glob://$dir/*.php");
foreach($it as $f) {
    printf("%s: %.1FK\n", $f->getFilename(), $f->getSize()/1024);
}

?>