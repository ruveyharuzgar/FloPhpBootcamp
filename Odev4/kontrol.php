<?php
    require_once("baglan.php");
    $baglan = baglan();

    
class Kontrol { 
       public $tckimlik = $_GET["tckimlik"];

       public function __construct($tckimlik){
        $this->tckimlik = $tckimlik;
        
        $tckimlik = trim($tckimlik);
        if ($tckimlik == "") {
            return "TC KİMLİK HATALI";
        }
        if ($tckimlik[0] == 0 or !ctype_digit($tckimlik) or strlen($tckimlik) != 11) {
            return "TC KİMLİK HATALI";
        } else {
            $cifthaneler = 0;
            for ($i = 0; $i < 9; $i += 2) {
                $ciftHaneler = $cifthaneler + $tckimlik[$i];
            }

            $tekhaneler = 0;
            for ($i = 1; $i < 9; $i += 2) {
                $tekhaneler = $tekhaneler + $tckimlik[$i];
            }

            $tumu = 0;
            for ($i = 0; $i < 10; $i++) {
                $tumu = $tumu + $tckimlik[$i];
            }

            if (($tekhaneler * 7 - $ciftHaneler) % 10 != $tckimlik[9]) {
                if($tumu % 10 != $tckimlik[10]){
                    return "TC KİMLİK DOĞRU";
                }
            } else {
                return "TC KİMLİK HATALI";
            }
        }   
}
}
?>