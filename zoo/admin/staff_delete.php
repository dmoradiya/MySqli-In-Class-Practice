<?php 

    require '../constants.php';
    $staff_id = null;

    $connection = new MySQLi(HOST, USER, PASSWORD, DATABASE);
    if( $connection->connect_errno ) {
        die("Connection failed:" . $connection->connect_error);
    }
    if( !isset($_GET['staff_id']) || $_GET['staff_id'] === "" ) {
        exit("You have reached this page by mistake");
    }
    if( filter_var($_GET['staff_id'], FILTER_VALIDATE_INT) ) {
        $staff_id = $_GET['staff_id'];
    } else {
        exit("An incorrect value for Staff ID was used");
    }
    $sql = "SELECT * FROM Staff WHERE StaffID=$staff_id";
    $result = $connection->query($sql);
    if( !$result ) {
        exit("There was a problem fetching results");
    }
    if( 0 === $result->num_rows ) {
        exit("The staff id provided did not match anyone in the database");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo - Remove Staff Member</title>
</head>
<body>
    <?php include 'admin_menu.php'; ?>
    <h1>Remove Staff Member</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        <p>Are you certain you want to remove FIRST_NAME LAST_NAME</p>
        <input type="hidden" name="staff_id" value="STAFF_ID">
        <input type="submit" value="Yes, remove staff member">
    </form>
</body>
</html>