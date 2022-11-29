<?php
    require_once 'baglan.php';
    $baglan = baglan();

    if (isset($_POST["kaydet"])) {

        $name_surname = $_POST["name_surname"];
        $birth_place = $_POST["birth_place"];
        $date_of_birth = $_POST["date_of_birth"];
        $email = $_POST["email"];
        $mobile_phone = $_POST["mobile_phone"];
        $home_phone = $_POST["home_phone"];
        $address = $_POST["address"];
        $gender = $_POST["gender"];
        $civil_status = $_POST["civil_status"];
        $driving_license = $_POST["driving_license"];
        $soldiering = $_POST["soldiering"];
        
        //$application_date = $_POST["application_date"];
        //$edu_id = $_POST["edu_id"];
    
        $sorgu = $baglan -> prepare("insert into application values (?,?,?,?,?,?,?,?,?,?,?,?)");
        $ekle = $sorgu -> execute(array(NULL, $name_surname, $birth_place, $date_of_birth,$email,$mobile_phone,$home_phone,$address,$gender,$civil_status,$driving_license,$soldiering));
        
        $kisikayitno = $baglan -> lastInsertId();
    
        $sorgu -> closeCursor(); unset($sorgu);
    
        if ($_POST["school_name"]) {
            foreach ($_POST['school_name'] as $key => $value) {
                $sorgu2 = $baglan -> prepare("insert into educationinformation values (?,?,?)");
                $ekle2 = $sorgu2 -> execute(array(NULL, $school_name, $graduation_year));
                
                $egitimkayitno = $baglan -> lastInsertId();


                $sorgu2 -> closeCursor(); unset($sorgu2);

                $sorgu3 = $baglan-> prepare("insert into application_education (FK_application_id,FK_education_id) values (?,?)");
                $ekle3 = $sorgu3->execute(array($FK_application_id,$FK_education_id));

                $sorgu3 -> closeCursor(); unset($sorgu3);

            }
        }
        header("location:index.php");
    }

    ?>
<?php
/*Formda kullandığımız her eleman için bir değişken oluşturup varsayılan değerleri ekliyoruz.*/
$name_surname = "";
$date_of_birth=0;
$email = "";
$mobile_phone = "";
$home_phone = "";
$address = "";
$gender = "Kadın"; //Cinsiyet kısmı için varsayılan değeri Kadın atadım
$civil_status = "Bekar"; 
$driving_license = "YOK";
$soldiering = "Yapılmadı";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<script src="js/TelefonMaske.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <style>
        body {
            background-image: url('img/bg (7).jpg');
        }
    </style>
</head>
<body>
<body>
<div class="container">
    <form name="egitim" method="post" action="">

        <table class="table table-responsive">
            <tr>
                <td>
                    <h1 style="background-color: powderblue">İŞ BAŞVURU FORMU</h1>
                <td>
            <tr>
                <td>Adınız ve Soyadınız</td>
                <td>
                    <input type="text" name="name_surname" class="form-control" placeholder="Adınız ve Soyadınız" required/>
                </td>
            </tr>
            <tr>
                <td>Doğum Yeri Ve Tarihi</td>
                <td>
                    <input type="text" name="birth_place" class="form-control" placeholder="Doğum Yerinizi Giriniz" required/>
                </td>
                <td>
                    <select name="date_of_birth" class="form-control" required>
                        <option value="0"> YIL </option>
                        <?php
                        /*
                        Doğum yılı içinde bir döngü yardımı ile liste elemanlarını (option)
                        ekliyoruz. Eğer bir değer seçilmiş ise bunu if yardımı ile kontrol edip
                        selected kodunu ekliyoruz ki o değer seçili gelsin.
                        */
                        $j = date("Y");//yılı verir
                        while ($j > 1920) {
                            if ($j == $date_of_birth)
                                echo "<option value='$j' selected>$j</option>";
                            else
                                echo "<option value='$j'>$j</option>";
                            $j--;
                        }

                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Mail Adresiniz</td>
                <td>
                    <input type="email" name="email" placeholder="aaa@gmail.com" class="form-control" required/>
                </td>
            </tr>
            <tr>
                <td>Cep Telefon Numarası</td>
                <td>
                    <input type="text" name="mobile_phone" placeholder="(5##)#######"
                           onkeyup="javascript:backspacerUP(this,event);" class="form-control" required/>
                </td>
            </tr>
            <tr>
                <td>Ev Telefon Numarası</td>
                <td>
                    <input type="text" name="home_phone" placeholder="(212)#######"
                          onkeyup="javascript:backspacerUP(this,event);" class="form-control"/>
                </td>
            </tr>
            <tr>
                <td>Adres</td>
                <td>
                    <textarea class="form-control" name="address" placeholder="Mahalle , Sokak / Cadde , NO , İL , İLÇE"
                              id="address" rows="3" required></textarea>
                </td>
            </tr>
            <tr>
                <td>Cinsiyetiniz</td>
                <td>
                    <label><input type="radio" name="gender"
                                  value="Kadın" <?php echo $gender == "Kadın" ? "checked" : "" ?>>
                        Kadın </label>
                    <label><input type="radio" name="gender"
                                  value="Erkek" <?php echo $gender == "Erkek" ? "checked" : "" ?>>
                        Erkek </label>
                </td>
            </tr>
            <tr>
                <td>Medeni Haliniz</td>
                <td>
                    <label><input type="radio" name="civil_status"
                                  value="Bekar" <?php echo $civil_status == "Bekar" ? "checked" : "" ?>>
                        Bekar </label>
                    <label><input type="radio" name="civil_status"
                                  value="Evli" <?php echo $civil_status == "Evli" ? "checked" : "" ?>>
                        Evli </label>
                    <label><input type="radio" name="civil_status"
                                  value="Boşanmış" <?php echo $civil_status == "Boşanmış" ? "checked" : "" ?>>
                        Boşanmış </label>
                </td>
            </tr>
            <tr>
                <td>EHLİYET</td>
                <td>
                    <label><input type="radio" name="driving_license"
                                  value="YOK" <?php echo $driving_license == "YOK" ? "checked" : "" ?>>
                        YOK </label>

                    <label><input type="radio" name="driving_license"
                                  value="VAR" <?php echo $driving_license == "VAR" ? "checked" : "" ?>>
                        VAR </label>
                </td>
            </tr>
            <tr>
                <td>ASKERLİK DURUMU</td>
                <td>
                    <label><input type="radio" name="soldiering"
                                  value="Yapılmadı" <?php echo $soldiering == "Yapılmadı" ? "checked" : "" ?>>
                        Yapılmadı </label>
                    <label><input type="radio" name="soldiering"
                                  value="Muaf" <?php echo $soldiering == "Muaf" ? "checked" : "" ?>>
                        Muaf </label>
                    <label><input type="radio" name="soldiering"
                                  value="Yapıldı" <?php echo $soldiering == "Yapıldı" ? "checked" : "" ?>>
                        Yapıldı </label>
                </td>
            </tr>
            </tr>
            <br>
            <br>
        </table>
        <table class="table table-responsive">
            <div role="tabpanel" class="tab-pane" id="educationtab">
                <br/>

                <div class="col-md-7">
                    <table id="education" class="table table-condensed">

                        <thead>
                        <tr>
                            <th>
                                <h4>Eğitim Bilgileri</h4>
                            </th>
                        </tr>
                        <tr>
                            <th><strong>Okul Sayısı</strong></th>
                            <th>Okul Adı</th>
                            <th>Okul Mezun YILI</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <!-- tablonun body kısmında varsayılan olarak 1. Okulu ekliyoruz
                        metin kutularını dizi olarak ekliyoruz (alanlar[]).-->
                            <th><strong>Okul 1</strong></th>
                            <td><input id="school_name" name="school_name[]" type="text" class="form-control" required></td>
                            <td><input id="graduation_year" name="graduation_year[]" type="text" class="form-control" required>
                            </td>
                            <td></td>
                        </tr>
                        </tbody>
                        <!-- footer kısmında okul ekle butonu yerleştiriyoruz-->
                        <tfoot>
                        <th></th>
                        <td></td>
                        <td></td>
                        <td><p id="add"><a style="color:white;" class="btn btn-primary">&raquo; Yeni Okul Ekle
                                </a></p>
                        </td>
                        </tfoot>
                    </table>
                    <tr>
                        <td><h4 style="text-align:center; background-color:powderblue;  ">TASARLAYAN VE DÜZENLEYEN :
                                Rüveyha Rüzgar <br> Emekleri ve Yardımlarından dolayı " Mehmet selçuk Batal " Öğretmenime Teşekkür
                                ediyorum.</h4></td>
                    </tr>
                    <input id="submit" name="submit" type="submit" value="İŞ BAŞVURU FORMUNU GÖNDER"
                           class="btn btn-primary btn-block"/>
                    <br>
                    <br>
                </div>
            </div>
        </table>
    </form>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">


    var sayac = 1; //kaçıncı okul bilgisini tutuyoruz
    $(function () {
        $('#add').click(function () {
            sayac += 1;
            $('#education tbody').append(
                '<tr><th><strong>Okul ' + sayac + '</strong></th><td><input id="school_name' + sayac + '" name="school_name[]' + '" type="text" class="form-control" required/></td>'
                + '<td><input id="graduation_year' + sayac + '" name="graduation_year[]' + '" type="text" class="form-control" required/></td>' +
                '<td><a href="sil.php?id=<?php echo $sonuc["id"] ?>" class="sil btn btn-danger">Sil</a></td></tr>');
        });
        //sil bağlantısına tıklanınca çalışacak jquery kodumuz
        //sil tıklandığında tablodaki bulunduğu tr yi siliyoruz
        $('#education').on("click", ".sil", function (e) { //user click on remove text
            e.preventDefault();
            $(this).closest("tr").remove();
        })
    });
    //panellerin geçişini sağlıyor.
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
</script>
</body>
</html>
