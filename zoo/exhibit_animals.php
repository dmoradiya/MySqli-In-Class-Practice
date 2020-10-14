<?php
    $exhibit_id = null;

    if( !isset( $_GET['exhibit_id'] ) || $_GET['exhibit_id'] === "" ) {
        echo "You have reached this page by mistake.";
        exit();
    }
    $exhibit_id = $_GET['exhibit_id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechCareers Exhibit Animals</title>
</head>
<body>
    <h1>Animals in the Exhibit Name Exhibit</h1>
    <p>Exhibit Description</p>
    <h3>Animal Name - Common Name</h3>
    <p>Scientific Name</p>
</body>
</html>