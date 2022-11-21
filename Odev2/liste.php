<?php
    include_once("menu.php");
?>

<?php
    session_start();
    $satirlar=array();
    $dosya=fopen("sepet.txt","rb");
    while(!feof($dosya)){
        $satirlar[]=fgets($dosya);
        $_SESSION["$satirlar"];
    }
    fclose($dosya);

    echo "<table border='1' width='100%'>
    <tr>
    <td> Ürün Adı </td>
    <td> Ürün Fiyatı </td>
    <td> Adet </td>
    </tr>";

    foreach($satirlar as $satir){
        $veri=explode(" | ",$satir);
        if($veri[0]!=""){
            $sayac++;
            echo "
            <tr>
            <td> $veri[0] </td>
            <td> $veri[1] </td>
            <td> $veri[2] </td>
            </tr>";
        }
    }
    echo "</table>";
    ?>