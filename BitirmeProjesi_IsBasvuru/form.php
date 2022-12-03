<?php
require_once 'baglan.php';
$baglan = baglan();

$id = (int) $_GET["id"];

if ($id > 0) {
    $sorgu = $baglan->query("select * from application where (id=$id)");
    $kayit = $sorgu->fetchObject();
}
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
                        DÜZENLE
                    </span> <br><br>
                    <a href="index.php" class="fw-bolder text-white-800 text-hover-primary fs-10 btn " style="float:left; background-color: #9A58AD; color: aliceblue;"> TÜM BAŞVURULARI GÖRÜNTÜLE </a>
                </div>

                <form id="uploadphoto" method="post" enctype="multipart/form-data">
                    <span class="label-input100">CV Yükleyiniz</span>
                    <input class="input100 pt-3" type="file" name="files">

                    <div class="container-login100-form-btn pb-5" style="padding-left: 30%;">
                        <input type="hidden" name="id" value="<?php echo $kayit->id; ?>">
                        <button type="submit" class="login100-form-btn pb-10" style="background-color: #9A58AD; color: aliceblue;"> CV EKLE </button>
                    </div>
                </form>
                <form action="kayit.php" method="post" class="login100-form validate-form">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" style="float:left" type="text" name="name" placeholder="Adınız " value="<?php echo $kayit->name; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="surname" placeholder="Soyadınız" value="<?php echo $kayit->surname; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="birth_place" placeholder="Doğum Yeri" value="<?php echo $kayit->birth_place; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <span class="label-input100">Doğum Tarihi</span>
                        <input class="input100" type="date" name="date_of_birth" value="<?php echo $kayit->date_of_birth; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="mail" name="email" placeholder="Mail Adresiniz" value="<?php echo $kayit->email; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="mobile_phone" placeholder="Cep Telefonu" value="<?php echo $kayit->mobile_phone; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="home_phone" placeholder="Ev Telefonu" value="<?php echo $kayit->home_phone; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="school_name" placeholder="Okul Adı" value="<?php echo $kayit->school_name; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <span class="label-input100">Mezuniyet Yılı</span>
                        <input class="input100" type="date" name="graduation_year" value="<?php echo $kayit->graduation_year; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="address" placeholder="Adres" value="<?php echo $kayit->address; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="gender" placeholder="Cinsiyet" value="<?php echo $kayit->gender; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="civil_status" placeholder="Medeni Hali" value="<?php echo $kayit->civil_status; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="driving_license" placeholder="Ehliyet" value="<?php echo $kayit->driving_license; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <input class="input100" type="text" name="soldiering" placeholder="Askerlik Durum" value="<?php echo $kayit->soldiering; ?>">
                    </div>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Boş geçilemez">
                        <span class="label-input100">Başvuru Tarihi</span>
                        <input class="input100" type="date" name="application_date" value="<?php echo $kayit->application_date; ?>">
                    </div>

                    <div class="container-login100-form-btn pb-5" style="padding-left: 30%;">
                        <input type="hidden" name="id" value="<?php echo $kayit->id; ?>">
                        <button type="submit" class="login100-form-btn" style="background-color: #9A58AD; color: aliceblue;"> GÜNCELLE </button>
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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

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