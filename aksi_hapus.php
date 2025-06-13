<?php
include("config.php");
mysqli_query($mysqli,"delete from mhs where nim='$_GET[nim]'");
header("location:mahasiswa.php");
?>