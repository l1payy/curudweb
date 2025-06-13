<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$tgllahir=$_POST['tgllahir'];
$alamat=$_POST['alamat'];
$agama=$_POST['agama'];
include('config.php');
mysqli_query($mysqli,"update mhs set
 nama='$nama',
 tgllahir='$tgllahir',
 alamat='$alamat',
 agama='$agama' where nim='$nim'");
header("location:http:/dayat/mahasiswa.php");
?>