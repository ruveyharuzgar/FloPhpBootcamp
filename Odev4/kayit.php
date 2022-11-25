<?php
    require_once("baglan.php");
    $baglan = baglan();

    require_once("kontrol.php");
    $kontrol = new Kontrol();

    $adsoyad = $_POST["adsoyad"];
    $tckimlik = $_POST["tckimlik"];

    $kontrol->test($tckimlik);

    $sorgu = $baglan -> prepare("insert into kisiler(id,adsoyad,tckimlik,durum) values (?,?,?,?)");
    $ekle = $sorgu -> execute(NULL,$adsoyad,$kontrol->$tckimlik,$kontrol->durum);

    if($ekle){
        echo "<script>
        alert('Başarılı: Bilgiler Kaydedildi');
        window.top.location = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Hata: Bilgiler Kaydedilemedi!');
        window.top.location = 'index.php';
        </script>";
    }

?>