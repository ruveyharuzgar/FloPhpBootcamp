<?php
    require_once("baglan.php");
    $baglan = baglan();

    $adsoyad = $_POST["adsoyad"];
    $tckimlik = $_POST["tckimlik"];

    $sorgu = $baglan -> prepare("insert into kisiler(id,adsoyad,tckimlik) values (?,?,?)");
    $ekle = $sorgu -> execute(array(NULL,$adsoyad,$tckimlik));

    if($ekle){
        echo "<script>
        alert('Başarılı: Bilgiler Kaydedildi');
        window.top.location = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Hata: Bilgiler Kaydedilemedi');
        window.top.location = 'index.php';
        </script>";
    }

?>