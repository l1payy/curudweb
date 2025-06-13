<?php
$mysqli=mysqli_connect('localhost','root','','mahasiswa');
mysqli_select_db($mysqli,'mahasiswa') or die("database tidak ditemukan");
?>