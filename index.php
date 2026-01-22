<?php include 'kalkulasi.php'; ?>
<html>
    <head>
        <title>Konversi Suhu</title>
        <style>
            body{
                background-color: dark_pink;
            }
            span{
                color: pink;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td><h1>Celcius</h1></td>
                <td><h1>=</h1></td>
                <td><h1><?= cek_data("celcius"); ?> <span>°C</span></h1></td>
            </tr>
            <tr>
                <td><h1>Farenheit</h1></td>
                <td><h1>=</h1></td>
                <td><h1><?= cek_data("farenheit"); ?> <span>°F</span></h1></td>
            </tr>
            <tr>
                <td><h1>Reamur</h1></td>
                <td><h1>=</h1></td>
                <td><h1><?= cek_data("reamur"); ?> <span>°R</span></h1></td>
            </tr>
            <tr>
                <td><h1>Kelvin</h1></td>
                <td><h1>=</h1></td>
                <td><h1><?= cek_data("kelvin"); ?> <span>K</span></h1></td>
            </tr>
        </table>
        <hr>
        <form action="" method="GET">
            <table>
                <tr>
                    <td>Celcius</td>
                    <td><input type="number" name="celcius"></td>
                    <td><input type="submit" name="dor" value="Hitung_C"></td>
                </tr>
                <tr>
                    <td>Farenheit</td>
                    <td><input type="number" name="farenheit"></td>
                    <td><input type="submit" name="dor" value="Hitung_F"></td>
                </tr>
                <tr>
                    <td>Reamur</td>
                    <td><input type="number" name="reamur"></td>
                    <td><input type="submit" name="dor" value="Hitung_R"></td>
                </tr>
                <tr>
                    <td>Kelvin</td>
                    <td><input type="number" name="kelvin"></td>
                    <td><input type="submit" name="dor" value="Hitung_K"></td>
                </tr>
                <tr>
                    <td>
                        <br>        
                        <a href="index.php">
                            <button type="button">Bersihkan</button>
                        </a>
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>