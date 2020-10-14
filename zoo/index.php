<?php
    // Create connection
    $connection = new mysqli('127.0.0.1', 'root', '', 'zoo');
    
    // Did we have errors connecting?
    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }
    
    echo 'Connected successfully. Now you can perform queries.';
    
    $connection->close();
?>