<?php
 if(isset($_COOKIE['nama'])) {
echo "<h1>Cookie 'nama' ada. Isinya : " . $_COOKIE['nama'];
} else {
echo "<h1>Cookie 'nama' TIDAK ada.</h1>";
}
if(isset($_COOKIE['nim'])) {
echo "<h1>Cookie 'nim' ada. Isinya : " . $_COOKIE['nim'];
} else {
echo "<h1>Cookie 'nim' TIDAK ada.</h1>";
}
if(isset($_COOKIE['fakultas'])) {
echo "<h1>Cookie 'fakultas' ada. Isinya : " . $_COOKIE['fakultas'];
} else {
echo "<h1>Cookie 'fakultas' TIDAK ada.</h1>";
}
if(isset($_COOKIE['jurusan'])) {
echo "<h1>Cookie 'jurusan' ada. Isinya : " . $_COOKIE['jurusan'];
} else {
echo "<h1>Cookie 'jurusan' TIDAK ada.</h1>";
}
echo "<h2>Klik <a href='form_mahasiswacookies.php'>di sini</a> untuk penciptaan cookies</h2>";
?> 