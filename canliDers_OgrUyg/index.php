<?php
    require_once 'baglan.php';
    $baglan = baglan();
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
    <p style="text-align: center;"> <br> <a href = "form.php"> Yeni Kayıt Ekle </a> <br> </p>
    <table border = "1" width = "100%">
        <tr>
            <td> Sıra No </td>
            <td> Ad Soyad </td>
            <td> TC Kimlik No </td>
            <td> Kayıt Tarihi </td>
            <td> İşlemler </td>
        </tr>

    <?php
        $sirano = 0;
        $sorgu = $baglan -> prepare("select * from ogrenciler order by adsoyad asc");
        $sorgu -> execute();
        foreach ($sorgu as $satir){
            $sirano++;
            echo "
            <tr>
                <td> $sirano </td>
                <td> $satir[adsoyad] </td>
                <td> $satir[tckimlik] </td>
                <td> $satir[tarih] </td>
                <td>
                 <a href = 'sil.php?op=ogrenci&id=$satir[id]'> Sil </a> 
                </td>
            </tr>";

            $notlar = "Not Kaydı Bulunamadı!";
            $baglan = baglan();
            $sorgu2 = $baglan -> prepare("select * from notlar where (ogrid = ?)");
            $sorgu2 -> execute(array($satir["id"]));
            foreach ($sorgu2 as $satir2){
                $ortalama = round(( $satir2["vize1"] + $satir2["vize2"] + $satir2["final"] ) / 3);
                $notlar = " <b> Vize 1 : </b> $satir2[vize1] -
                <b> Vize 2 : </b> $satir2[vize2] - 
                <b> Final : </b> $satir2[final] - 
                <b> Ortalama : </b> $ortalama => {  
                <a href = 'sil.php?op=not&id=$satir2[id]'> Sil </a> 
                }";
                
            }
            $sorgu2 -> closeCursor(); unset($sorgu2);


            echo "<tr>
            <td colspan='5'> $notlar </td>
            </tr>";
        }

        $sorgu -> closeCursor(); unset($sorgu);
        
    ?>
    </table>
</body>
</html>