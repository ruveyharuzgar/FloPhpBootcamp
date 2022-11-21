<?php
    require_once 'baglan.php';
    $baglan = baglan();

    $adsoyad = $_POST["adsoyad"];
    $tckimlik = $_POST["tckimlik"];
    $vize1 = (int) $_POST["vize1"];
    $vize2 = (int) $_POST["vize2"];
    $final = (int) $_POST["final"];
    $tarih = date("Y-m-d");

    $sorgu = $baglan -> prepare("insert into ogrenciler values (?,?,?,?)");
    $ekle = $sorgu -> execute(array(NULL, $adsoyad, $tckimlik, $tarih));
    $kayitno = $baglan -> lastInsertId();

    $sorgu -> closeCursor(); unset($sorgu);

    if ($ekle){


        $sorgu2 = $baglan -> prepare("insert into notlar values (?,?,?,?,?)");
        $sorgu2 -> execute(array(NULL, $kayitno, $vize1, $vize2, $final));
    
        $sorgu2 -> closeCursor(); unset($sorgu);
    

        echo "<script>
        alert('Başarılı: Bilgiler Kaydedildi');
        window.top.location = 'index.php';
        </script>";
    } else {
        echo "<script>
        alert('Hata: Bilgiler Kaydedilemedi');
        window.top.location = 'form.php';
        </script>";
    }
?>