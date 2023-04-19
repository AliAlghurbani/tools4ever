<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Users form</title>
</head>

<body>
    <h1> Nieuw user </h1>
    <form action="verwerk-nieuw-product.php" method="post">
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" name="id" id="id" class="input">
        </div>
        <div class="form-group">
            <label for="userEmail">Email</label>
            <input type="text" name="userEmail" id="userEmail" class="input">
        </div>
        <div class="form-group">
            <label for="userPassword">password</label>
            <input type="text" name="userPassword" id="userPassword" class="input">
        </div>
        <div class="form-group">
            <label for="userFirstname">Firstname</label>
            <input type="text" name="userFirstname" id="userFirstname" class="input">
        </div>
        <div class="form-group">
            <label for="userLastname">Lastname</label>
            <input type="text" name="userLastname" id="userLastname" class="input">
        </div>
        <div class="form-group">
            <label for="userAddress">Address</label>
            <input type="text" name="userAddress" id="userAddress" class="input">
        </div>
        <div class="form-group">
            <label for="userCity">city</label>
            <input type="text" name="userCity" id="userCity" class="input">
        </div>
        <div class="form-group">
            <label for="activeness">Activeness</label>
            <label for="not_active"> Not Active</label>
            <input type="radio" name="not_active" id="not_active" class="radio">
            <label for="is_active">Active</label>
            <input type="radio" name="is_active" id="is_active" class="radio">
        </div>
        <div class="form-group">
            <label for="userAddress">Address</label>
            <input type="text" name="userAddress" id="userAddress" class="input">
        </div>
        <button type="submit"> maak nieuw product!</button>

</body>

</html>