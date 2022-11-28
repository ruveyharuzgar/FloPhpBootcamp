
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalp Krizi Hesaplama</title>
</head>
<body>
    <form action="soru4" method="post" style="text-align:center;">

        <b> Alkol Kullanıyor mu ? </b> <br>
        <input name="iciyormu" type="radio" value="evet" /> Evet
        <input name="iciyormu" type="radio" value="hayır" /> Hayır
    
        <input type="submit" name="submit" value=" Hesapla " style="background-color: royalblue; color:white;">

    </form>
   
    </form>

<?php
    if ( isset($_POST["submit"])) {
        if ( $_POST["iciyormu"] == "evet") {
            echo "%20";
        } else {
            echo "%1";
        }
        
     }
    
?>

</body>
</html>
