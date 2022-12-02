<?php
    require_once 'baglan.php';
    $baglan = baglan();

	$kayitno = $_GET["id"];

	if($kayitno>0) {
		$sorgu = $baglan->query("select * from application where id=$kayitno");
		$kayit = $sorgu->fetchObject();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <style>
        .basvuruOlusturmaAlani {
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
<body style="text-align: center">
    <p> 
        <br><a style="background: darkgreen; color: aliceblue;" href = "index.php"> BAŞVURULARI GÖRÜNTÜLE </a><br> 
    </p>
<div class="basvuruOlusturmaAlani">

    <form action="kayit.php" method="post">
        <input type="text" placeholder="Ad" name="name" value="<?php echo $kayit->name; ?>"> <br><br>
        <input type="text" placeholder="Soyad"  name="surname" value="<?php echo $kayit->surname; ?>"> <br><br>
        <input type="text" placeholder="Doğum Yeri"  name="birth_place" value="<?php echo $kayit->birth_place; ?>"> <br><br>
        Doğum Tarihi <input type="date" placeholder="Doğum Tarihi" name="date_of_birth" value="<?php echo $kayit->date_of_birth; ?>"> <br><br>
        <input type="email" placeholder="E-posta" name="email" value="<?php echo $kayit->email; ?>"> <br><br>
        <input type="tel" placeholder="Cep Telefonu" name="mobile_phone" value="<?php echo $kayit->mobile_phone; ?>"> <br><br>
        <input type="tel" placeholder="Ev Telefonu" name="home_phone" value="<?php echo $kayit->home_phone; ?>"> <br><br>
        <input type="text" placeholder="Okul Adı" name="school_name" value="<?php echo $kayit->school_name; ?>"> <br><br>
        <input type="number" placeholder="Mezuniyet Yılı" name="graduation_year" value="<?php echo $kayit->graduation_year; ?>"> <br><br>
        <input type="text" placeholder="Adres" name="address" value="<?php echo $kayit->address; ?>"> <br><br>
        <input type="text" placeholder="Cinsiyet" name="gender" value="<?php echo $kayit->gender; ?>"> <br><br>
        <input type="text" placeholder="Medeni Hali" name="civil_status" value="<?php echo $kayit->civil_status; ?>"> <br><br>
        <input type="text" placeholder="Ehliyet" name="driving_license" value="<?php echo $kayit->driving_license; ?>"> <br><br>
        <input type="text" placeholder="Askerlik Durumu" name="soldiering" value="<?php echo $kayit->soldiering; ?>"> <br><br>
        Başvuru Tarihi <input type="date" placeholder="Başvuru Tarihi" name="application_date" value="<?php echo $kayit->application_date; ?>"> <br><br>

        <br><br><hr><br>
        <br><a style="background: darkgreen; color: aliceblue;" href = "cv.php"> Cv Yükle </a><br> 
        <br><br><hr><br>

		<input type="hidden" name="id" value="<?php echo $kayit->id; ?>">
        <input type="submit" value="Başvur">

    </form>

    
</div>

</body>
</html>