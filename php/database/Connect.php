<?php

/* 
 * Autoloading Database classes for the Bug Tracking System
 * 
 * @package BugTrackingSystem
 * @version 1.0
 */

spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

try {
    $mysqli = (new MySQLiClient('db', 'bug_tracking', 'user', 'password'))->connect();
} catch (\mysqli_sql_exception $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

$products = $mysqli->select("SELECT * FROM products")->get();




