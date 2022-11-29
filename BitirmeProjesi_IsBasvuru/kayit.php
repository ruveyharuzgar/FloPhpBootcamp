<?php
    require_once 'baglan.php';
    $baglan = baglan();

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $birth_place = $_POST["birth_place"];
    $date_of_birth = $_POST["date_of_birth"];
    $email = $_POST["email"];
    $mobile_phone = $_POST["mobile_phone"];
    $home_phone = $_POST["home_phone"];
    $school_name = $_POST["school_name"];
    $graduation_year = $_POST["graduation_year"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $civil_status = $_POST["civil_status"];
    $driving_license = $_POST["driving_license"];
    $soldiering = $_POST["soldiering"];
    $application_date = date("Y-m-d");

    $sorgu = $baglan -> prepare("insert into application values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $ekle = $sorgu -> execute(array(NULL, $name, $surname, $birth_place, $date_of_birth, $email, $mobile_phone, $home_phone, $school_name, $graduation_year, $address, $gender, $civil_status, $driving_license, $soldiering, $application_date));
    
    $kayitno = $baglan -> lastInsertId();

    $sorgu -> closeCursor(); unset($sorgu);

    if ($ekle){
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