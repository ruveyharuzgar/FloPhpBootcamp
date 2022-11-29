<?php
    require_once 'baglan.php';
    $baglan = baglan(); 

    if ($_GET["id"]) {

    //Get ile gelen id integer türüne pars edip değişkende tutuyoruz
    $ogrid = (int)$_GET["id"];

    //basvuruegitim veri tabanından ogrenci bilgilerini siliyoruz
    $baglan->query("delete from application_education where FK_application_id=$ogrid");

    //egitim veri tabanından basvuruya ait egitim bilgilerini siliyoruz
    // burada egitim veri tabanında ogrenci bilgisi eşleşmeyenleri siliyoruz
    $baglan->query("delete d from education d where not exists (select * from application_education where FK_education_id = d.id)");

    //Son olarak basvuru tablosundan ogrenci bilgisini siliyoruz
    $baglan->query("delete from application where id=$ogrid");


    //index sayfamıza geri dönüyoruz.
    header("location:index.php");
}
//Eğer get ile veri gelmemişse index sayfasına dönüyoruz
header("location:index.php");