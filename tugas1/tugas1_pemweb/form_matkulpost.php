

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>POST</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" >
  </head>
  
  <body style="margin: 50px;">
    <h1>Form Matkul Dengan Metode Post</h1>
    
    <form action="form_matkulpost2.php" method="post"  >
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="sks" >sks</label>
            <input type="text" class="form-control" id="sks" name="sks" >
        </div>
        <div class="mb-3">
            <label for="dosen" >Dosen</label>
            <input type="text" class="form-control" id="dosen" name="dosen" >
        </div>
       
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    <script src="bootstrap/js/bootstrap.bundle.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>