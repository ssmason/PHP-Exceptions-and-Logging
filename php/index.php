<?php 

/**
 * Bug Tracking System
 * 
 * This file serves as the entry point for the Bug Tracking System.
 * It initializes the application and sets up the necessary components.
 * 
 * @package BugTrackingSystem
 * @version 1.0
 */


// Include the database connection setup
include_once __DIR__ . '/database/connect.php';

// we have a connection

echo 'Hello, World!<br/>';
 
foreach ($products as $product){
    var_dump($product->Name);
}