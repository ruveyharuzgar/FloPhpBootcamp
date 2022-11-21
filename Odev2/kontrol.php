<?php
    require_once('fonksiyonlar.php');

    $urunAdi= guvenlik($_POST["urunAdi"]);
    $urunFiyati= guvenlik($_POST["urunFiyati"]);
    $adet= guvenlik($_POST["adet"]);

    /*
    var_dump($_POST);
    */
    if($urunAdi=="" && $urunFiyati="" && $adet>0){
        echo "<script>
        alert('Ürün adı boş, ürün fiyatı ve adet 0 dan düşük girilemez!');
        window.top.location='sepet.php';
        </script>";
        die();
    }

    $dosya=fopen("sepet.txt","abt");
    $sonuc=fwrite($dosya,"$urunAdi | $urunFiyati | $adet\n");
    fclose($dosya);
    if($sonuc){
        echo "<script>
        alert('Başarılı :) $urunAdi Sepete Eklendi.');
        window.top.location='sepet.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Hata! $urunAdi Sepete Eklenmedi.');
        window.top.location='sepet.php';
        </script>";
    }
?>