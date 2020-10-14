<?php
    require 'constants.php';

    // Create connection
    $connection = new mysqli(HOST, USER, PASSWORD, DATABASE);
    
    // Did we have errors connecting?
    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }
    
    $sql = "SELECT * FROM Exhibit";
    
    $result = $connection->query($sql);
    
    if( $result->num_rows > 0 ) {
        
        while( $row = $result->fetch_assoc() ){
            echo '<pre>';
            print_r($row);
            echo '</pre>';
        }


    } else {
        echo "There are no exhibits";
    }
    
    $connection->close();
?>