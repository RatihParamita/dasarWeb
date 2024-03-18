<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];
        echo "Nama: {$Dosen ['nama']} <br>";
        echo "Domisili: {$Dosen ['domisili']} <br>";
        echo "Jenis kelamin: {$Dosen ['jenis_kelamin']} <br>";
        echo "<br>Menampilkan Data Dosen Menggunakan Tabel<br>";
        ?>
        <table border="2" height=20 width=40% cellpadding="5">
            <tr>
                <th align="center" valign="center">
                    <font face="times new roman" color="black" size="4">Nama</font></td>
                <th align="center" valign="center">
                <font face="times new roman" color="black" size="4">Domisili</font></td>
                <th align="center" valign="center">
                    <font face="times new roman" color="black" size="4">Jenis kelamin</font></td>
            </tr>
            <tr>
                <td align="left" valign="center">
                    <font face="times new roman" color="black" size="3">
                        <?php echo $Dosen['nama'];?></font></td>
                <td align="left" valign="center">
                    <font face="times new roman" color="black" size="3">
                        <?php echo $Dosen['domisili'];?></font></td>
                <td align="left" valign="center">
                    <font face="times new roman" color="black" size="3">
                        <?php echo $Dosen['jenis_kelamin'];?></font></td>
            </tr>
        </table>
    </body>
</html>