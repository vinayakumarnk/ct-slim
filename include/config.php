<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

print_r('i m in confg');
/**
 * Database configuration
 */
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', '');
//define('DB_HOST', 'localhost');
//define('DB_NAME', 'vinay_slim');
define('DB_USERNAME', 'b3839c81c0b0de');
define('DB_PASSWORD', 'f32b049b');
define('DB_HOST', 'us-cdbr-iron-east-02.cleardb.net');
define('DB_NAME', 'heroku_5139ce7a09c55ce');
print_r('end of config');
define('USER_CREATED_SUCCESSFULLY', 0);
define('USER_CREATE_FAILED', 1);
define('USER_ALREADY_EXISTED', 2);

?>