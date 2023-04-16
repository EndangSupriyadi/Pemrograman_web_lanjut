


</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GET</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" >
  </head>
  <body style="margin: 50px;">
    <h1>Form Mahasiswa Dengan Metode GET</h1>
    <form action="form_mahasiswaget2.php" method="get"  >
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
    </form>
    <script src="bootstrap/js/bootstrap.bundle.js" ></script>
  </body>
</html>