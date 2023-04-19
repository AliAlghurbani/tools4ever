<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title> Form </title>
</head>

<body>
    <h1> Nieuw gereedschap </h1>
    <form action="verwerk-nieuw-product.php" method="post">
        <div class="form-group">
            <label for="naamProduct">Naam</label>
            <input type="text" name="naamProduct" id="naamProduct" class="input">
        </div>
        <div class="form-group">
            <label for="categorieProduct">categorie</label>
            <input type="text" name="categorieProduct" id="categorieProduct" class="input">
        </div>
        <div class="form-group">
            <label for="prijsProduct">prijs</label>
            <input type="text" name="prijsProduct" id="prijsProduct" class="input">
        </div>
        <div class="form-group">
            <label for="merkProduct">merk</label>
            <input type="text" name="merkProduct" id="merkProduct" class="input">
        </div>
        <button type="submit"> maak nieuw product!</button>



    </form>

</body>

</html>