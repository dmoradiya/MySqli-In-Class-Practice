<?php
    require 'constants.php';

    // Create connection
    $connection = new mysqli(HOST, USER, PASSWORD, DATABASE);
    
    // Did we have errors connecting?
    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }
    
    echo 'Connected successfully. Now you can perform queries.';
    
    $connection->close();
?>