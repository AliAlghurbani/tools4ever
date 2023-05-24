<?php

require 'database.php';

//opdracht1
$result = mysqli_query($conn, "SELECT COUNT(*) AS number_of_employees FROM users WHERE role = 'employee' ");
$aantal = mysqli_fetch_assoc($result);

//opdracht2
$result = mysqli_query($conn, "SELECT AVG(tool_price) AS averge_price FROM tools ");
$tools_data = mysqli_fetch_assoc($result);

//opdracht3
$result = mysqli_query($conn, "SELECT AVG(tool_price) AS averge_price, tool_category FROM tools GROUP BY tool_category");
$tools_data2 = mysqli_fetch_all($result);


session_start();

if (!isset($_SESSION['isIngelogd'])) {
    header("location: inloggen.php");
    exit;
}

if ($_SESSION['role'] != 'administrator') {
    header("location: store.php");
    exit;
}

require 'vendor/autoload.php';

use Carbon\Carbon;

$dt =  Carbon::now();


echo $dt->adddays(4);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Welkom admin!</h1>
    <div>
        <p>Aantal werknemers: <?php echo $aantal['number_of_employees']; ?></p>
    </div>
    <div>
        <p>Tool averge price: <?php echo $tools_data['averge_price'] ?></p>
    </div>
    <div>
        <table>
            <thead>
                <th> Gemiddelde prijs</th>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</body>

</html>