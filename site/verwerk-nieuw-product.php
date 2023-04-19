<?php

require 'database.php';

var_dump($_SERVER);

die;

$naam = $_POST['naamProduct'];
$categorie = $_POST['categorieProduct'];
$prijs = $_POST['prijsProduct'];
$merk = $_POST['merkProduct'];

$sql = "INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand) VALUES ('$name', '$categorie', '$prijs', '$merk') ";

mysqli_query($conn, $sql);



?>