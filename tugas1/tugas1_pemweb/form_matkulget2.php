
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
    echo "<b>DATA Mata Kuliah</b> <br>";
    $nama = $_GET["nama"];
    echo "Nama Anda : <b>$nama</b> <br>";
    $sks = $_GET["sks"];
    echo "SKS Anda : <b>$sks</b> <br>";
    $dosen= $_GET["dosen"];
    echo "Dosen Anda : <b>$dosen</b><br>";
    

    }?>
<?php endif ?>
    



</body>
</html>