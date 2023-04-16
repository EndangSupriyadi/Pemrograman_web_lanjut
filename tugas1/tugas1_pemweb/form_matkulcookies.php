<?php
$value = 'Pemrograman Web';
$value1 = '3';
$value2 = 'Endang';


setcookie("nama", $value);
setcookie("sks", $value1);
setcookie("dosen", $value2, time()+3600); /* expire in 1 hour */
echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='form_matkulcookies2.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?> 