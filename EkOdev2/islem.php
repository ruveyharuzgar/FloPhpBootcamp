<?php 
    session_start();
     
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"]; 
    $tur = $_POST["tur"];
    $taneBuyuklugu = $_POST["taneBuyuklugu"];
    $temizlikOrani = $_POST["temizlikOrani"];
    $miktar = $_POST["miktar"]; 

    echo" ******Fatura********";
    if (isset($_POST["submit"])==true) {

        $_SESSION['cevherler']=array(
            array("cevher"=>"demir", "kodu"=> "DMR", "fiyat"=> 1500),
            array("cevher"=>"krom", "kodu"=> "KRM", "fiyat"=> 5000),
            array("cevher"=>"bakir", "kodu"=> "BKR", "fiyat"=> 3000),
            array("cevher"=>"komur", "kodu"=> "KMR", "fiyat"=> 500),
            ); 

        $_SESSION['taneler']=array(
            array("tane"=>"erik", "taneKodu"=> 1, "etkisi"=> 15),
            array("tane"=>"portakal", "taneKodu"=> 2, "etkisi"=> 10),
            array("tane"=>"Karpuz", "taneKodu"=> 3, "etkisi"=> 0),
            ); 


        $cevherFiyat = cevherFiyat($tur);
        $taneEtkisi = taneEtkisi($taneBuyuklugu);
        $temizlikEtkisi = temizlikEtkisi($temizlikOrani,$taneEtkisi,$cevherFiyat);
        $etkisi = $cevherFiyat - temizlikEtkisi($temizlikOrani,$taneEtkisi,$cevherFiyat);

        echo "<br> Alıcı: ".ucfirst($ad)." ".ucfirst($soyad)."<br><br><br>";
        echo "Cevher Türü: ".ucfirst($tur)."<br>";
        

        
    function cevherFiyat($tur){
        
        foreach ($_SESSION['cevherler'] as $cevher) {
                
            if ($cevher["cevher"] == $tur) {
                $birimFiyat = $cevher["fiyat"];
                return $birimFiyat;
                break;
            }
        }
    }

    function taneEtkisi($taneBuyuklugu){
        
        foreach ($_SESSION['taneler'] as $tane) {
                
            if ($tane["taneKodu"] == $taneBuyuklugu) {
                $taneEtkisi = $tane["etkisi"];
                return $taneEtkisi;
            }
        }
    }
        
    function temizlikEtkisi($temizlikOrani,$taneEtkisi,$cevherFiyat){

        if ($temizlikOrani > 0 ) {
            $yeniBirimFiyati = ($cevherFiyat * $temizlikOrani) / 100;
            return $yeniBirimFiyati;
        }
        elseif ($temizlikOrani == 100) {
            $yeniBirimFiyati = $cevherFiyat;
        }
    }

    function kdvHesaplayıcı($fiyat){
        $kdv = ($fiyat * 8) / 100;
        return $kdv;
    }
    

        foreach ($_SESSION['cevherler'] as $cevher) {

            if ($cevher["cevher"] == $tur) {
                echo "Normal Birim Fiyat: ".$cevher['fiyat']." TON/TL<br>";
            }
        }
        
        foreach ($_SESSION['taneler'] as $tane) {

            if ($tane["taneKodu"] == $taneBuyuklugu) {
                echo "Tane : ".ucfirst($tane["tane"])."(-".$tane["etkisi"].") <br>";
            }
        }

        echo "Temizlik : %".$temizlikOrani ." Etkisi: -".$etkisi." TL <br>";
        echo "Miktar (TON) : $miktar <br>";
        echo "<br>Temizlik Etkisi Sonrası <br><br>";

        $etki = $cevherFiyat - temizlikEtkisi($temizlikOrani,$taneEtkisi,$cevherFiyat);
        $sonFiyat = $cevherFiyat - $etki;
        
        echo "Birim Fiyatı : ".$sonFiyat." TON / TL <br>";
        $toplamFiyat = $miktar * $sonFiyat;

        echo "Toplam : ".$toplamFiyat."<br>";
        $kdv = kdvHesaplayıcı($toplamFiyat);
        echo "Kdv (%8) :".$kdv."<br>";

        $kdvDahilToplam = $toplamFiyat + $kdv;
        echo "Genel Toplam: $kdvDahilToplam TL <br><br>"; 
        
        echo "Mega Madencilik, 2016 <br><br>";
        echo "*******************************";
    }
        
?>