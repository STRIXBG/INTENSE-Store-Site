<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(!defined('SERVER'))
{
    define('SERVER', 'localhost'); // Fill in your server's name.
}
if(!defined('USERNAME'))
{
    define('USERNAME', 'root'); // Fill in your database username.
}
if(!defined('PASSWORD'))
{
    define('PASSWORD', ''); // Fill in your database password if any.
}
if(!defined('DATABASE'))
{
    define('DATABASE', 'intense'); // Fill in your database.
}


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
