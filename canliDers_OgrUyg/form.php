<?php
    require_once 'baglan.php';
    $baglan = baglan();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center">
    <p> 
        <br><a href = "index.php"> Ana Sayfa </a><br> 
    </p>

    <form action="kayit.php" method="post">
        <b>Adı Soyadı: </b> <br>
        <input type="text" name="adsoyad"> <br><br>
        <b>TC Kimlik: </b> <br>
        <input type="text" name="tckimlik"> <br><br>
        <b>Vize 1: </b> <br>
        <input type="number" name="vize1"> <br><br>
        <b>Vize 2: </b> <br>
        <input type="number" name="vize2"> <br><br>
        <b>Final: </b> <br>
        <input type="number" name="final"> <br><br>

        <input type="submit" value="Kaydet">
    </form>
</body>
</html>