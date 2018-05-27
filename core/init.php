<?php
// Initialises and connects to database 'cocobean'
$db = mysqli_connect('localhost', 'root_cocobean','','cocobean');

// Error checking with database
if(mysqli_connect_errno()) {
    echo 'Database connection failed with the following errors: ' . mysqli_connect_error();
    die();
}

define('BASE_URL', '/cocobean/');
?>