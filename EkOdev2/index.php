<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ek Odev - 2 </title>
</head>
<body>
<h3>** Cevher v1.0 ***</h3>

<form action="islem.php" method="post">
        
    <table width ="45%" >
            <tr>
                <td> * Müşteri’nin Adı : </td>
                <td><input name="ad" type="text" required>
                </td>
            </tr>
            
            <tr>
                <td> Soyadı : </td>
                <td> <input name="soyad"type="text" required>
                </td>
            </tr>

            <tr>
                <td> * Cevherin Kodu</td>
                <td>
                    <select style="width:50%" name="tur">
                        <option value="Demir">DMR</option>
                        <option value="Krom">KRM</option>
                        <option value="Bakir">BKR</option>
                        <option value="Komur">KMR</option>
                    </select> 
                </td>
            </tr>

            <tr>
                <td> Tane büyüklüğü </td>
                <td><input type="number" name="taneBuyuklugu" >
                </td>
            </tr>

            <tr>
                <td> Temizlik oranı </td>
                <td><input type="number" name="temizlikOrani" >
                </td>
            </tr>

            <tr>
                <td> Miktar (TON) </td>
                <td> <input type="number" name="miktar">
                </td>
            </tr>

            <td>
                    <input type="submit" name="submit" value="Hesapla">
            </td>
        </table>
    </form>
<br>
</body>
</html>