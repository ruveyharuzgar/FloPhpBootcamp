<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center">

    <?php
    include_once("menu.php");
    ?>

    <form method="post" action="kontrol.php">
    <b>Ürün Adı: </b> <br>
    <input type="text" name="urunAdi">
    <br><br>
    <b>Ürün Fiyatı: </b> <br>
    <input type="number" name="urunFiyati">
    <br><br>
    <b>Adet </b> <br>
    <input type="number" name="adet">
    <br><br>
    <input type="submit" value="Ürünü Sepete Ekle">
    </form>

    
</body>
</html>