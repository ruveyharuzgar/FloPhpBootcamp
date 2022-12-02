<?php
session_start();
if ($_SESSION["user"] != sha1(md5("ruveyharuzgar")) || $_COOKIE["user"] != "ruveyharuzgar") {
    header("cikis.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ana sayfa</title>
</head>

<body>

    <a href="../index.php"> Başvuruları Görüntüle </a>
    <a href="..//ekle.php"> Kişi Ekle </a>

</body>

</html>