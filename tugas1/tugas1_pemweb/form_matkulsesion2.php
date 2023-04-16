<?php
session_start();
echo"<b>DATA Mata Kuliah</b>";
echo "<br/>Nama Matkul Anda adalah ".$_SESSION['nama'];
echo "<br/>sks Anda adalah ".$_SESSION['sks'];
echo "<br/>Dosen Anda adalah ".$_SESSION['dosen'];

echo "<br/><a href='form_matkulsesion.php'>Kembali ke hal pertama</a>";
?> 