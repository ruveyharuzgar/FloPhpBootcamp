<?php

    include("baglan.php");

    $adSoyad = $_POST["adSoyad"];
    $telefonNo = $_POST["telefonNo"];

    $sorgu=$baglanti->query("insert into kullanicilar (adSoyad,telefonNo) values ('$adSoyad','$telefonNo')");
 
    $toplam=$baglanti->affected_rows;

    if($toplam>0){
        echo "Kayıt Eklendi.";
        echo "<script> window.top.location='index.php'; </script>";
    }
    else{
        echo "Kayıt Eklenemedi.";
    }

?>
