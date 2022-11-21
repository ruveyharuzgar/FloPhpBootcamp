<?php
    require_once 'baglan.php';
    $baglan = baglan();

    $islem = $_GET["op"];
    $kayitno = (int) $_GET["id"];

    if ( $kayitno > 0) {
        if ( $islem == "ogrenci"){
            $sorgu = $baglan -> prepare("delete from ogrenciler where (id=?)");
            $sil = $sorgu -> execute(array($kayitno));
            $sorgu -> closeCursor(); unset($sorgu);

            if($sil){
                $sorgu2 = $baglan -> prepare("delete from notlar where (ogrid=?)");
                $sorgu2 -> execute(array($kayitno));
                $sorgu2 -> closeCursor(); unset($sorgu2);
    
                echo "<script>
                alert('Başarılı: Öğrenci Silindi');
                window.top.location = 'index.php';
                </script>";
            } else {
                echo "<script>
                alert('Hata: Öğrenci Silinemedi');
                window.top.location = 'index.php';
                </script>";
            }
        } else if ( $islem == "not") {
            $sorgu = $baglan -> prepare("delete from notlar where (id=?)");
            $sil = $sorgu -> execute(array($kayitno));
            $sorgu -> closeCursor(); unset($sorgu);

            if($sil){
                echo "<script>
                alert('Başarılı: Notlar Silindi');
                window.top.location = 'index.php';
                </script>";
            } else {
                echo "<script>
                alert('Hata: Notlar Silinemedi');
                window.top.location = 'index.php';
                </script>";
            }
        } else {
            header("Location:index.php");
        }
    } else {
        header("Location:index.php");
    }
?>
