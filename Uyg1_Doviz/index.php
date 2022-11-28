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
    <title>Doviz Hesaplama</title>
</head>
<body>
    <form action="" method="post" style="text-align:center;">
         
        <b> Hesaplamak istediğiniz Türk Lirasını Giriniz :</b> <br>
        <input type="number" name="tl" value=""><br><br>

        <input type="submit" name="submit" value=" Hesapla " style="background-color: royalblue; color:white;">
    </form>
<?php
    $sorgu = $baglan -> prepare("select * from kurlar");
    $sorgu -> execute();

    foreach ($sorgu as $satir){
    echo "Sterlin Kuru: $satir[sterlin] <br>
    Avro Kuru: $satir[avro] <br>
    Dolar Kuru:  $satir[dolar] <br><br><hr><br>";
     
    if ( isset($_POST["submit"])) {
        $tl = $_POST["tl"];
        echo "Elinizdeki Türk lirası Miktarı= " .$tl."<br><br>";
        $hesapla = $satir["sterlin"] * $tl;
        $hesapla2 = $satir["avro"] * $tl;
        $hesapla3 = $satir["dolar"] * $tl;

        echo "Sterlin: $hesapla <br><br>
        Avro: $hesapla2 <br><br>
        Dolar: $hesapla3 <br><br>";
     }
    }
?>

</body>
</html>
