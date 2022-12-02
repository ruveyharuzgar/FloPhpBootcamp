<?php
    function baglan(){
    $baglan = NULL;
    
    try{ 
    $baglan = new PDO("mysql:host=localhost;dbname=job_application;charset=utf8","ruveyha","1234");
    
    $baglan -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $baglan -> setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $baglan -> setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,false);
    $baglan -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (Exception $e ) {
        $baglan = base64_encode("bh"); 
    }
    if (!($baglan instanceof PDO )) {
        $baglan = base64_encode("bsh");
    }
    return $baglan;
    }
