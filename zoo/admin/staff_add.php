<?php
    require '../constants.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo - Add Staff</title>
</head>
<body>
    <h1>Add a staff member</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
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