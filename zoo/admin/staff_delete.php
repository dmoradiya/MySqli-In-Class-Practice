<?php 

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