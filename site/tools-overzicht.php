<?php

require 'database.php';

//de sql query
$sql = "SELECT * FROM tools";

//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);


$all_tools = mysqli_fetch_all($result, MYSQLI_ASSOC);

// $search = $_GET['tool'];
// $search = $mysqli->real_escape_string($search);

// $query = "SELECT tool_name FROM tools WHERE tool_name LIKE '%" . $search . "%'";
// $result = $mysqli->query($query);

// while ($row = $result->fetch_object()) {
//   echo "<div id='link' onClick='addText(\"" . $row->tool_name . "\");'>" . $row->tool_name . "</div>";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Tools </title>
</head>

<body>

  <form action="verwerk-zoek.php" method="post">
    <label for=""> zoek </label>
    <input type="text" name="zoekveld" placeholder="Type here">
    <button type="submit"> Zoek!</button>
  </form>

  <table>
    <thead>
      <tr>
        <th>tool id</th>
        <th>tool name</th>
        <th>tool category</th>
        <th>tool price</th>
        <th>tool brand</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($all_tools as $tool) : ?>
        <tr>
          <td><?php echo $tool['tool_id'] ?></td>
          <td><?php echo $tool['tool_name'] ?></td>
          <td><?php echo $tool['tool_category'] ?></td>
          <td><?php echo $tool['tool_price'] ?></td>
          <td><?php echo $tool['tool_brand'] ?></td>
          <td><a href="tools-detail.php?id=<?php echo $tool['tool_id'] ?>">Bekijk tool</a></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>

</body>

</html>