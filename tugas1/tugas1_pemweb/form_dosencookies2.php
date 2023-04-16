<?php
 if(isset($_COOKIE['nama'])) {
echo "<h1>Cookie 'nama' ada. Isinya : " . $_COOKIE['nama'];
} else {
echo "<h1>Cookie 'nama' TIDAK ada.</h1>";
}
if(isset($_COOKIE['nidn'])) {
echo "<h1>Cookie 'nidn' ada. Isinya : " . $_COOKIE['nidn'];
} else {
echo "<h1>Cookie 'nidn' TIDAK ada.</h1>";
}
if(isset($_COOKIE['matkul'])) {
echo "<h1>Cookie 'matkul' ada. Isinya : " . $_COOKIE['matkul'];
} else {
echo "<h1>Cookie 'matkul' TIDAK ada.</h1>";
}

echo "<h2>Klik <a href='form_dosencookies.php'>di sini</a> untuk penciptaan cookies</h2>";
?> 