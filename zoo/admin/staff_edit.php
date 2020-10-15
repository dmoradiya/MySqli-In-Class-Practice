<?php
    require '../constants.php';
    $staff_id = null;

    // If we don't have a staff id, do not continue
    if( !isset($_GET['staff_id']) || $_GET['staff_id'] === "" ) {
        exit("You have reached this page by mistake");
    }

    // If the staff id is not an INT, do not continue
    if( filter_var($_GET['staff_id'], FILTER_VALIDATE_INT ) ) {
        $staff_id = $_GET['staff_id'];
    } else {
        exit("An incorrect value was passed");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo - Staff Edit</title>
</head>
<body>
    <?php include 'admin_menu.php' ?>
    <h1>Edit Staff Member</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
    <p>
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name">
    </p>
    <p>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name">
    </p>
    <p>
        <input type="submit" value="Add new staff member">
    </p>
    </form>
</body>
</html>