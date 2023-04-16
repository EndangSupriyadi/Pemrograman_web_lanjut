<?php
$value = 'Endang Supriyadi';
$value1 = '200511123';
$value2 = 'Teknik';
$value3 = 'Teknik Informatika';

setcookie("nama", $value);
setcookie("nim", $value1);
setcookie("fakultas", $value2);
setcookie("jurusan", $value3, time()+3600); /* expire in 1 hour */
echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='form_mahasiswacookies2.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?> 