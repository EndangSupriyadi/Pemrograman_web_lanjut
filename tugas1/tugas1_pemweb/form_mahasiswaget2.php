
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSGET</title>
</head>
<body>
<?php if ( isset($_GET["submit"])): {
    echo "<b>DATA MAHASISWA</b> <br>";
    $nama = $_GET["nama"];
    echo "Nama Anda : <b>$nama</b> <br>";
    $nim = $_GET["nim"];
    echo "NIM Anda : <b>$nim</b> <br>";
    $fakultas= $_GET["fakultas"];
    echo "Fakultas Anda : <b>$fakultas</b><br>";
    $jurusan = $_GET["jurusan"];
    echo "Jurusan Anda : <b>$jurusan</b>";

    }?>
<?php endif ?>
    



</body>
</html>