<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" style="text-align:center;">
         
         <b> Saniye gir:</b> <br>
         <input type="number" name="sure" value=""><br><br>
 
         <input type="submit" name="submit" value=" Çevir " style="background-color: royalblue; color:white;">
     </form>
    <?php
    if ( isset($_POST["submit"])) {
    $sure = $_POST["sure"];
    echo "Girilen Saniye= " .$sure."<br><br>";

    $saat = floor($sure / 3600);
    $dakika = floor(($sure / 60) % 60);
    $saniye = $sure % 60;
    
    echo "$saat : $dakika : $saniye <br><br>";
 }

    //echo gmdate("H:i:s", 3600); 
    ?>
</body>
</html>