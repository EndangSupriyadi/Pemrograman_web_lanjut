<?php
session_start();
echo"<b>DATA DOSEN</b>";
echo "<br/>Nama Anda adalah ".$_SESSION['nama'];
echo "<br/>NIDN Anda adalah ".$_SESSION['nidn'];
echo "<br/>Matkul Anda adalah ".$_SESSION['matkul'];
echo "<br/><a href='form_dosensesion.php'>Kembali ke hal pertama</a>";
?> 