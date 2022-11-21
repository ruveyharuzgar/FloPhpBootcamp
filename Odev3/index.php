<?php

    include("baglan.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ana Sayfa </title>
</head>
<body style="text-align:center;padding: top 50px;">

    <h3 style="text-align: left ;">Form Sayfası:</h3>

    <form action="ekle.php" method="post" style="text-align:center;">
        <b>Adınız Soyadınız:</b> <br>
        <input type="text" name="adSoyad" value=""><br><br>
        <b>Telefon Numaranız:</b> <br>
        <input type="text" name="telefonNo" value=""><br><br>
        <input type="submit" value="Bilgileri Kaydet" style="background-color: royalblue; color:white;">
    </form>

    <h3 style="text-align: left ;">Liste Sayfası:</h3>

    <table width ="100%" border="1" style="border-collapse:collapse ;">
        <tr>
            <th> Adı Soyadı </th>
            <th> Telefon Numarası </th>
            <th> İşlem </th>
        </tr>

        <?php
            $sorgu = $baglanti -> prepare("select * from kullanicilar order by id asc");
            while($satir = $sorgu ->fetch(PDO::FETCH_ASSOC))
            {
                echo " <tr align='center'>
                <td> $satir->adSoyad </td>
                <td> $satir->telefonNo </td>
                <td> <a href = 'sil.php?id=$satir->id'> Sil </td>
                </tr>
                ";
            } 

            $toplamKayıt= $sorgu->num_rows;

            echo "<tr>
            <td colspan='3'>
              <center>
              Sistemde toplam $toplamKayıt kayıt var.
              </center>
            </td>
          </tr>
            "; 

        ?>
           
    </table>
<br><br>


</body>
</html>