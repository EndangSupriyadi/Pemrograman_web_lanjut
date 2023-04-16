<?php
/****************************************************
Halaman ini merupakan halaman contoh penciptaan session.
Perintah session_start() harus ditaruh di perintah pertama
tanpa spasi di depannya. Perintah session_start() harus ada
pada setiap halaman yang berhubungan dengan session
*****************************************************/
session_start();
$_SESSION['nama'] = "Pemrograman web";
$_SESSION['sks'] = "3";
$_SESSION['dosen'] = "Endang";

echo "<a href='form_matkulsesion2.php'>Menuju ke halaman kedua</a>";
?>