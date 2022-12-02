<?php

$files = $_FILES["files"]["tmp_name"];
$newFileName = $_FILES["files"]["name"];

$control = array("application/pdf", "application/jpg", "application/png");

if (in_array($_FILES["files"]["type"], $control)) {
    $upload = move_uploaded_file($files, $newFileName);
    if ($upload) {
        echo "<script>
            alert('Cv Yüklendi');
            window.top.locaiton=index.php;
            </script> <br>
            ";
    } else {
        echo "<script>
            alert('Hata!');
            </script>
            ";
    }
} else {
    echo "<script>
        alert('Lütfen pdf/jpg/png formatta yükleyiniz');
        </script>
        ";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="cv.php" method="post" enctype="multipart/form-data">

        Cv Yükleme <input type="file" name="files"> <br><br>

        <input type="submit" name="dugme" value="Yükle">

    </form>
</body>

</html>