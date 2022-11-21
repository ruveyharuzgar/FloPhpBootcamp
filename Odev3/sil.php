<?php

    include("baglan.php");

    $kayitNo=$_GET["id"];

    $sorgu=$baglanti->prepare("delete from kullanicilar where id=$kayitNo");

    if($sorgu){
        echo "<script>
        alert('Kayıt Silindi!');
        window.top.location='index.php';
        </script>";
    } else{
        echo "<script>
        alert('Kayıt Silinemedi!');
        </script>";
    }

?>