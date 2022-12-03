<?php
require_once 'baglan.php';
$baglan = baglan();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V15</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="./sign/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./sign/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./sign/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./sign/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./sign/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./sign/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./sign/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./sign/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./sign/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./sign/css/util.css">
    <link rel="stylesheet" type="text/css" href="./sign/css/main.css">
    <!--===============================================================================================-->
</head>
<script>
    $(document).ready(function() {
        $("#uploadphoto").on("submit", function(e) {
            e.preventDefault();
            $.ajax({
                url: "form.php",
                type: "post",
                data: new FormData(this),
                contentType: false,
                preventDefault: false,
                success: function(data) {
                    alert(data);
                }
            })
        })
    })
</script>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(./sign/images/titlebackground.jpg);">
                    <span class="login100-form-title-1">
                        SENİ ARAMIZDA GÖRMEYİ ÇOK İSTERİZ
                    </span>
                </div>

                <form id="uploadphoto" method="post" enctype="multipart/form-data">
                    <span class="label-input100">CV Yükleyiniz</span>
                    <input class="input100 pt-3" type="file" name="files">

                    <div class="container-login100-form-btn pb-5" style="padding-left: 30%;">
                        <input type="hidden" name="id">

                        <button type="submit" class="login100-form-btn pb-10" style="background-color: #9A58AD; color: aliceblue;"> cv ekle </button>
                    </div>
                </form>
                <form action="ekle.php" method="post" class="login100-form validate-form">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" style="float:left" type="text" name="name" placeholder="Adınız">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="surname" placeholder="Soyadınız">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="birth_place" placeholder="Doğum Yeri">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <span class="label-input100">Doğum Tarihi</span>
                        <input class="input100" type="date" name="date_of_birth">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="mail" name="email" placeholder="Mail Adresiniz">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="mobile_phone" placeholder="Cep Telefonu">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="home_phone" placeholder="Ev Telefonu">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="school_name" placeholder="Okul Adı">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <span class="label-input100">Mezuniyet Yılı</span>
                        <input class="input100" type="date" name="graduation_year">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="address" placeholder="Adres">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="gender" placeholder="Cinsiyet">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="civil_status" placeholder="Medeni Hali">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="driving_license" placeholder="Ehliyet">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="soldiering" placeholder="Askerlik Durum">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <span class="label-input100">Başvuru Tarihi</span>
                        <input class="input100" type="date" name="application_date">
                    </div>
                    <div class="container-login100-form-btn pb-5" style="padding-left: 30%;">
                        <input type="hidden" name="id">
                        <button type="submit" class="login100-form-btn" style="background-color: #9A58AD; color: aliceblue;"> EKLE </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="./sign/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="./sign/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="./sign/vendor/bootstrap/js/popper.js"></script>
    <script src="./sign/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="./sign/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="./sign/vendor/daterangepicker/moment.min.js"></script>
    <script src="./sign/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="./sign/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="./sign/js/main.js"></script>

</body>

</html>

<?php

if ($_POST) {
    $source = $_FILES["files"]["tmp_name"];
    $target = "cv/" . $_FILES["files"]["name"];
    move_uploaded_file($source, $target);
    if (move_uploaded_file($source, $target)) {
        echo "Cv Yüklendi";
    } else {
        echo "Cv Yüklenemedi";
    }
}
?>