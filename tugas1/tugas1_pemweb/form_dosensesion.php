<?php
/****************************************************
Halaman ini merupakan halaman contoh penciptaan session.
Perintah session_start() harus ditaruh di perintah pertama
tanpa spasi di depannya. Perintah session_start() harus ada
pada setiap halaman yang berhubungan dengan session
*****************************************************/
session_start();
$_SESSION['nama'] = "Endang Supriyadi";
$_SESSION['nidn'] = "200511123";
$_SESSION['matkul'] = "Pemrograman Web";

echo "<a href='form_dosensesion2.php'>Menuju ke halaman kedua</a>";
?>