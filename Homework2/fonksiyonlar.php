<?php

function guvenlik($metin){
    $metin=htmlspecialchars(strip_tags($metin));
    return $metin;
}

?>