<?php
 if(isset($_COOKIE['nama'])) {
echo "<h1>Cookie 'nama' ada. Isinya : " . $_COOKIE['nama'];
} else {
echo "<h1>Cookie 'nama' TIDAK ada.</h1>";
}
if(isset($_COOKIE['sks'])) {
echo "<h1>Cookie 'sks' ada. Isinya : " . $_COOKIE['sks'];
} else {
echo "<h1>Cookie 'sks' TIDAK ada.</h1>";
}
if(isset($_COOKIE['dosen'])) {
echo "<h1>Cookie 'dosen' ada. Isinya : " . $_COOKIE['dosen'];
} else {
echo "<h1>Cookie 'dosen' TIDAK ada.</h1>";
}

echo "<h2>Klik <a href='form_matkulcookies.php'>di sini</a> untuk penciptaan cookies</h2>";
?> 