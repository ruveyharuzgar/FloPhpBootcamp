<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php

    function hesapla($agilSayisi=0,$agilKapasitesi=0,$koyunSayisi=0)
    { 
        echo "Toplam Ağıl: $agilSayisi <br>";
        $toplamKapasite=$agilKapasitesi*$agilSayisi;
        echo "Toplam Kapasite: $toplamKapasite <br>";
        echo "Toplam Koyun: $koyunSayisi <br><br>";

        while($agilSayisi>0)
        {
            if($koyunSayisi>$agilKapasitesi)
            {
                echo $agilSayisi.".ci Ağıl: ".$agilKapasitesi." Koyun <br>";
                $koyunSayisi-=$agilKapasitesi;
            }
            elseif($koyunSayisi>0)
            {
                echo $agilSayisi.".ci Ağıl: ".$koyunSayisi." Koyun <br>";
                $koyunSayisi-=$agilKapasitesi;
            }
            else
            {
                echo $agilSayisi.".ci Ağıl: 0 Koyun <br>";
            }
            $agilSayisi--;
        }
        echo "<br><br>";
        if($agilKapasitesi*$agilSayisi<$koyunSayisi)
        {
            echo "Dışarıda Kalan: ".$koyunSayisi." Koyun";
        }
    }

    hesapla(3,45,147);
    
    ?>
</body>
</html>