<?php
require 'database.php';


$result = mysqli_query($conn, "SELECT COUNT(email) FROM users WHERE role = 'employee' ");
$row = mysqli_fetch_array($result);
session_start();

if (!isset($_SESSION['isIngelogd'])) {
    header("location: inloggen.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>

<body>
    <h1> <?php echo "Hello! " . $_SESSION['firstname']; ?> </h1>
    <div>
        <a href="logout.php"> logout </a>
    </div>
</body>

</html>