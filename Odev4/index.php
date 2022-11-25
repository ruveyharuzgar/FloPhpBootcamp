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
    <title> Form Sayfası: </title>
</head>
<body style="text-align: center">

<h3 style="text-align: left ;">Form Sayfası:</h3>

    <form action="kayit.php" method="post">
        <b>Adı Soyadı: </b> <br>
        <input type="text" name="adsoyad"> <br><br>
        <b>TC Kimlik Numarası: </b> <br>
        <input type="number" name="tckimlik"> <br><br>

        <input type="submit" value="Doğrula ve Kaydet">
    </form>

<h3 style="text-align: left ;"> Veritabanı Tablosu: </h3>



<table width ="100%" border="1" style="border-collapse:collapse ;">
        <tr>
            <th> id </th>
            <th> adsoyad </th>
            <th> tckimlik </th>
            <th> durum </th>
        </tr>

        <?php
            $sorgu = $baglan -> prepare("select * from kisiler order by id asc");
            $sorgu -> execute();

            foreach($sorgu as $satir)
            {
                echo "<tr align='center'>
                <td> $satir[id] </td>
                <td> $satir[adsoyad] </td>
                <td> $satir[tckimlik] </td>
                <td> <?php $satir = new Kontrol(str('$satir[tckimlik]'));
                ?>
                Kontrol Kısmı Eklenecek </td>
                </tr>
                ";
            } 

        ?>
           
    </table>
</body>
</html>