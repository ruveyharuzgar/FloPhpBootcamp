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
    <style>
        .basvurulariGoruntuleme {
            max-width: 450px;
            height: auto;
            border: 1px solid #ccc;
            padding: 15px;
            margin: 0 auto 0 auto;
            display: table;
            background: darkkhaki;

            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;

        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="basvurulariGoruntuleme">
    <table border = "1" width = "100%">
    <tr>
            <td> Sıra No </td>
            <td> Ad </td>
            <td> Soyad </td>
            <td> Doğum Yeri </td>
            <td> Doğum Tarihi </td>
            <td> E-mail </td>
            <td> Cep Telefonu </td>
            <td> Ev Telefonu </td>
            <td> Okul Adı </td>
            <td> Mezuniyet Yılı </td>
            <td> Adres </td>
            <td> Cinsiyet </td>
            <td> Medeni Durumu </td>
            <td> Ehliyet </td>
            <td> Askerlik </td>
            <td> Kayıt Tarihi </td>
            <td> İşlemler </td>
        </tr>
        <p style="text-align: center;"> <br> <a  style="background: darkgreen; color: aliceblue;" href = "index.php"> Filtreyi Sil </a> <br> </p>

    <?php
        if ($_GET) {
            $kelime = $_GET["kelime"];

            if (!$kelime) {
                echo "<script>
                alert('arama yapabilmek için bir kelime girin');
                window.top.location='index.php'
                </script>";
            } else {
                $sorgu = $baglan -> prepare("select * from application where name like :name");
                $sorgu -> execute(array(":name"=>$kelime."%"));
                $sirano=0;
                foreach ($sorgu as $satir){
                    $sirano++;
                    echo "
                    <tr>
                        <td> $sirano </td>
                        <td> $satir[name] </td>
                        <td> $satir[surname] </td>
                        <td> $satir[birth_place] </td>
                        <td> $satir[date_of_birth] </td>
                        <td> $satir[email] </td>
                        <td> $satir[mobile_phone] </td>
                        <td> $satir[home_phone] </td>
                        <td> $satir[school_name] </td>
                        <td> $satir[graduation_year] </td>
                        <td> $satir[address] </td>
                        <td> $satir[gender] </td>
                        <td> $satir[civil_status] </td>
                        <td> $satir[driving_license] </td>
                        <td> $satir[soldiering] </td>
                        <td> $satir[application_date] </td>
        
                        <td>
                         <a href = 'sil.php?op=basvuran&id=$satir[id]'> Sil </a> 
                        </td>
                    </tr>";
                }
        
                $sorgu -> closeCursor(); unset($sorgu);  

            }
        }
    ?>

    
</div>
    </table>
</body>
</html>