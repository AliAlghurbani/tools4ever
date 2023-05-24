<?php

require 'database.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    // echo "verkeerde request method gebruikt";
    include '405.php';
    exit;
}
$id = $_POST['id'];
$email = $_POST['userEmail'];
$password = $_POST['userPassword'];
$firstname = $_POST['userFirstname'];
$lastname = $_POST['userLastname'];
$address = $_POST['userAddress'];
$role = $_POST['userRole'];


$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users ( email, password, firstname, lastname, address, role)
 VALUES ( '$email', '$hashed_password', '$firstname', '$lastname', '$address', '$role') ";


if (mysqli_query($conn, $sql)) {
    header("location: inloggen.php");
    exit;
}
