


</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POST</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" >
  </head>
  <body style="margin: 50px;">
    <h1>Form Dosen Dengan Metode Post</h1>
    <form action="form_dosenpost2.php" method="post"  >
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="nidn" >NIDN</label>
            <input type="text" class="form-control" id="nidn" name="nidn" >
        </div>
        <div class="mb-3">
            <label for="matkul" >Mata Kuliah</label>
            <input type="text" class="form-control" id="matkul" name="matkul" >
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <script src="bootstrap/js/bootstrap.bundle.js" ></script>
  </body>
</html>