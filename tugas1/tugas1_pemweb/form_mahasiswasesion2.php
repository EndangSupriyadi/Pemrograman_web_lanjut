<?php
session_start();
echo"<b>DATA MAHASISWA</b>";
echo "<br/>Nama Anda adalah ".$_SESSION['nama'];
echo "<br/>NIM Anda adalah ".$_SESSION['nim'];
echo "<br/>Fakultas Anda adalah ".$_SESSION['fakultas'];
echo "<br/>Jurusan Anda adalah ".$_SESSION['jurusan'];
echo "<br/><a href='form_mahasiswasesion.php'>Kembali ke hal pertama</a>";
?> 