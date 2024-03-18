<!DOCTYPE html>
<html>
    <head>
        <body>
            <h2>Array Terindeks</h2>
            <?php
            $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
            echo $Listdosen[2] . "<br>";
            echo $Listdosen[0] . "<br>";
            echo $Listdosen[1] . "<br>";
            echo "<br>Menampilkan Array Menggunakan Perulangan<br>";
            foreach($Listdosen as $dosen){
                echo "Nama: $dosen<br>";
            };
            ?>
        </body>
    </head>
    </html>