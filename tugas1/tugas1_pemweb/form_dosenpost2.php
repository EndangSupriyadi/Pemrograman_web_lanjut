
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<?php if ( isset($_POST["submit"])): {
    echo "<b>DATA DOSEN</b> <br>";
    $nama = $_POST["nama"];
    echo "Nama Anda : <b>$nama</b> <br>";
    $nidn = $_POST["nidn"];
    echo "NIDN Anda : <b>$nidn</b> <br>";
    $matkul= $_POST["matkul"];
    echo "matkul Anda : <b>$matkul</b><br>";
   

    }?>
<?php endif ?>
    



</body>
</html>