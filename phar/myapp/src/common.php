<?php
// code from: https://www.sitepoint.com/packaging-your-apps-with-phar/

// Simple class with a static method to display text and var_dump's config file
class AppManager
{
    public static function run($config) {
         echo "Application is now running with the following configuration... ";
         var_dump($config);
     }
}