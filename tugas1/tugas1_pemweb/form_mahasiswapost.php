

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" >
  </head>
  
  <body style="margin: 50px;">
    <h1>Form Mahasiswa Dengan Metode Post</h1>
    
    <form action="form_dosenpost2.php" method="post"  >
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="nim" >NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" >
        </div>
        <div class="mb-3">
            <label for="fakultas" >Fakultas</label>
            <input type="text" class="form-control" id="fakultas" name="fakultas" >
        </div>
        <div class="mb-3">
            <label for="jurusan" >Jurusan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" >
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <script src="bootstrap/js/bootstrap.bundle.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>