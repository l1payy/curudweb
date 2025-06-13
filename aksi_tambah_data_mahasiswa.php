<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$tgllahir=$_POST['tgllahir'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
include('config.php');
mysqli_query($mysqli," insert into mhs values ('$nim','$nama','$tgllahir','alamat','agama')");
header("location:http:/dayat/mahasiswa.php");
?>