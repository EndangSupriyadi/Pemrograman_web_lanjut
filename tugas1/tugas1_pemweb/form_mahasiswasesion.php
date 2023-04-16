<?php
/****************************************************
Halaman ini merupakan halaman contoh penciptaan session.
Perintah session_start() harus ditaruh di perintah pertama
tanpa spasi di depannya. Perintah session_start() harus ada
pada setiap halaman yang berhubungan dengan session
*****************************************************/
session_start();
$_SESSION['nama'] = "Endang Supriyadi";
$_SESSION['nim'] = "200511123";
$_SESSION['fakultas'] = "Teknik";
$_SESSION['jurusan'] = "Teknik Informatika";
echo "<a href='form_mahasiswasesion2.php'>Menuju ke halaman kedua</a>";
?>