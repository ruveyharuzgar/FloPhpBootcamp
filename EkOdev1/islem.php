<?php
    session_start();

    $tur = $_POST["tur"];
    $tazelikDurumu = $_POST["tazelik"];
    $miktar = $_POST["miktar"];


    if (isset($_POST["submit"]) == true) 
    {
        $_SESSION['endeks'] = array(
            array("ot"=>"Kekik", "oran"=> 10),
            array("ot"=>"Nane", "oran"=> 20),
            array("ot"=>"Feslegen", "oran"=> 10),
            array("ot"=>"Reyhan", "oran"=> 25),
            ); 
  
        echo "Tür : ".$tur ."<br>";
        echo " $tur - miktar (kg) : ". $miktar ."<br>";
        echo "Taze mi (1 = taze ): ". $tazelikDurumu ."<br>";
        echo "İşlem Tutarı : ".otBirimFiyat($tur,$miktar)."<br>"; 
        echo "Tazelik Etkisi : ".tazelikEtkisi($tazelikDurumu,$tur,$miktar) ."<br>";
       
        $tutar = otBirimFiyat($tur,$miktar) + tazelikEtkisi($tazelikDurumu,$tur,$miktar);
        echo "Tutar : ".$tutar."<br>"; 
        
        $kdv = ($tutar * 18) / 100;
        echo "KDV ( %18 ) : ".$kdv ."<br><br>";

        echo "***************************** <br><br> 
        Fatura: <br><br>
        -------------------------------------------- <br><br>
        OT A.Ş. <br>";
        
        foreach ($_SESSION['endeks'] as $otlar) {
                
            if ($otlar["ot"] == $tur) {
                $oran = $otlar["oran"];
                break;
            }
        }
        echo "* ".$tur." ".$miktar." x ".$oran." = ".$tutar."<br>";
        if ($tazelikDurumu == "1") {
            echo "Taze <br>";
        }
        else {
            echo "Taze Değil <br>";
        }
        echo "KDV (%18) : ".$kdvHesap."<br>";
        echo "Genel Toplam : ",$tutar + $kdvHesap;

    }

    function otBirimFiyat($tur,$miktar){
            $fiyat=0;
            foreach ($_SESSION['otlar'] as $otlar) {
                
                if ($otlar["isim"] == $tur) {
                    $fiyat = $otlar["otfiyati"];
                    break;
                }
            }
            $sonuc= $miktar * $fiyat;
            return $sonuc;
        }
    
    function tazelikEtkisi($tazelikDurumu,$tur,$miktar){
       
        if ($tazelikDurumu == "0") {
            $fiyat=0;
            $oran = 0;
            foreach ($_SESSION['otlar'] as $otlar) {
            
                if ($otlar["isim"] == $tur) {
                    $fiyat = $otlar["otfiyati"];
                    break;
                }
            }
            
            foreach ($_SESSION['endeks'] as $otlar) {
                
                if ($otlar["ot"] == $tur) {
                    $oran = $otlar["oran"];
                    break;
                }
            }
            $toplam= $miktar * $fiyat;
            $hesap = ($toplam * $oran) / 100;
            return  "-".$hesap;
        }
    }
?>