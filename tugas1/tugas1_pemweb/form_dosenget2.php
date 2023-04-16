
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<?php if ( isset($_GET["submit"])): {
    echo "<b>DATA DOSEN</b> <br>";
    $nama = $_GET["nama"];
    echo "Nama Anda : <b>$nama</b> <br>";
    $nidn = $_GET["nidn"];
    echo "NIDN Anda : <b>$nidn</b> <br>";
    $matkul= $_GET["matkul"];
    echo "matkul Anda : <b>$matkul</b><br>";
   

    }?>
<?php endif ?>
    



</body>
</html>