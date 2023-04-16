
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
    echo "<b>DATA Mata Kuliah</b> <br>";
    $nama = $_POST["nama"];
    echo "Nama Anda : <b>$nama</b> <br>";
    $sks = $_POST["sks"];
    echo "SKS Anda : <b>$sks</b> <br>";
    $dosen= $_POST["dosen"];
    echo "Dosen Anda : <b>$dosen</b><br>";
    

    }?>
<?php endif ?>
    



</body>
</html>