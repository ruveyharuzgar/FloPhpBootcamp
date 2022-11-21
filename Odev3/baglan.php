<?php

    $baglanti = new PDO("mysql:host=localhost;dbname=rehber;charset=utf8","ruveyharuzgar","1234");
    $baglanti->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if($baglanti->connect_errno) echo "Hata: ". $baglanti->connect_errno;

?>