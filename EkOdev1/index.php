
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ek Odev - 1</title>
</head>

<body>
<h3><b> ** Ot Master v1.0 *** <b></h3>

<form action="islem.php" method="post">
        <table width ="45%" border="1" style="border-collapse:collapse;" >
            <tr>
            <h4>Kg başı ot fiyatlarını giriniz: </h4>
                <td> Kekik </td>
                <td><input name ="kekik" type ="number"></td>
                <td> Nane </td>
                <td><input name = "nane" type = "number" ></td>
                <br><br>
                <td> Fesleğen </td>
                <td><input name = "feslegen" type = "number"></td>
                <br><br>
                <td> Reyhan </td>
                <td> <input name = "reyhan" type = "number" ></td>
                <br><br>
                <td><input type = "submit" name = "submit" value = "Değiştir" ><br>
                </td>
            </tr>

        </table>
        
    </form>

    <form action="islem.php" method="post">
    <table width ="45%" border = "1" style = "border-collapse:collapse ;">
            <tr>
                <td> Tür </td>
                <td>
                    <select name = "tur">
                        <option value = "Kekik"> Kekik </option>
                        <option value = "Nane"> Nane </option>
                        <option value = "Fesleğen"> Fesleğen </option>
                        <option value = "Reyhan"> Reyhan </option>
                    </select> <br><br>
                </td>
            </tr>

            <tr>
                <td> Miktar </td>
                <td><input type = "number" name = "miktar" ></td> <br><br>
            </tr>

            <tr>
                <td> Taze mi? </td>
                <td>
                    <input type = "checkbox" name = "tazelik" value = "1" /> Taze <br>
                    <input type = "checkbox" name = "tazelik" value = "0" /> Taze Değil <br>
                    <br><br>
                </td>
                <td>
                <input type = "submit" name = "submit" value = "Hesapla">

                </td>

            </tr>

    </table>

    </form>

</body>

</html>
