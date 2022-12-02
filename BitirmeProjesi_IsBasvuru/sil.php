<?php
    require_once 'baglan.php';
    $baglan = baglan();

    $kayitno = (int) $_GET["id"];

    if ( $kayitno > 0) {
            $sorgu = $baglan -> prepare("delete from application where (id=?)");
            $sil = $sorgu -> execute(array($kayitno));
            $sorgu -> closeCursor(); unset($sorgu);
            header("Location:index.php");

        } else {
        header("Location:index.php");
        }
