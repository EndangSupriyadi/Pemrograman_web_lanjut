<?php
$value = 'Endang Supriyadi';
$value1 = '123';
$value2 = 'Pemrograman Web';


setcookie("nama", $value);
setcookie("nidn", $value1);
setcookie("matkul", $value2, time()+3600); /* expire in 1 hour */
echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='form_dosencookies2.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?> 