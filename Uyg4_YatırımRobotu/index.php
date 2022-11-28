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
    <title>Yatırım Robotu</title>
</head>
<body>
    <p style="text-align: center;"> <br> <a href = "form.php"> Yeni Kayıt Ekle </a> <br> </p>
    <table border = "1" width = "100%">
        <tr>
            <td>  </td>
            <td>  </td>
            <td> </td>
            <td>  </td>
            <td>  </td>
        </tr>

    <?php
        $sirano = 0;
        $sorgu = $baglan -> prepare("select * from riskler order by adsoyad asc");
        $sorgu -> execute();
        foreach ($sorgu as $satir){
            $sirano++;
            echo "
            <tr>
                <td> $sirano </td>
                <td> $satir[dolar] </td>
                <td> $satir[avro] </td>
                <td> $satir[altın] </td>
                <td> $satir[gumus] </td>
                <td> $satir[faiz] </td>
                <td> $satir[bitcoin] </td>
            </tr>";

        }

        $sorgu -> closeCursor(); unset($sorgu);
        
    ?>
    </table>
</body>
</html>