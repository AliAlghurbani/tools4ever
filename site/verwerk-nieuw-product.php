<?php

require 'database.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
    // echo "verkeerde request method gebruikt";
    include '405.php';
    exit;
}

$name = $_POST['naamProduct'];
$categorie = $_POST['categorieProduct'];
$prijs = $_POST['prijsProduct'];
$merk = $_POST['merkProduct'];

$sql = "INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand)
 VALUES ('$name', '$categorie', '$prijs', '$merk') ";

mysqli_query($conn, $sql);

?>

