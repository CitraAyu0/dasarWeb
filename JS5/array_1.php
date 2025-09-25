<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Array Terindeks dengan Loop</h2>
        <?php
            $listDosen = ["Elok Nur Hamdana", "Unggul Pemenang", "Bagas Nugraha"];
            
            for ($i = 0; $i < count($listDosen); $i++) {
                echo $listDosen[$i] . "<br>";
            }
        ?>
    </body>
<html>
        