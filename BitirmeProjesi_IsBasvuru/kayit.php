<?php
    require_once 'baglan.php';
    $baglan = baglan();

    $kayitno = $_POST["id"];
   
    if ($kayitno>0){
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

        $sorgu = $baglan -> prepare("update application set name='$name',surname='$surname',birth_place='$birth_place',date_of_birth='$date_of_birth',email='$email',mobile_phone='$mobile_phone',home_phone='$home_phone',school_name='$school_name',graduation_year='$graduation_year',address='$address',gender='$gender',civil_status='$civil_status',driving_license='$driving_license',soldiering='$soldiering',application_date='$application_date' where id=$kayitno");
        $sorgu->execute();
        $kayitno = $sorgu->rowCount();
        if ($kayitno>0) {
            echo "<script>
            alert('Başarılı: Bilgiler Değiştirildi');
            window.top.location = 'index.php';
            </script>";
        } else {
            echo "<script>
            alert('Hata: Bilgiler Değiştirilemedi');
            window.top.location = 'index.php';
            </script>";
        }
        $sorgu -> closeCursor(); unset($sorgu);
    } else {

       header("Location:ekle.php");
    }
