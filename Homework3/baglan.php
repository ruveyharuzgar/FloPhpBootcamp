<?php

    $baglanti = new mysqli("localhost","ruveyharuzgar","1234","rehber");
    if($baglanti->connect_errno) echo "Hata: ". $baglanti->connect_errno;
    $baglanti -> set_charset("utf8");

?>