<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="form-container">
    <h2>Edit Data Mahasiswa</h2>
    <form action="aksi_edit_data_mahasiswa.php" method="POST">
      <?php
        include("config.php");
        $hasil = mysqli_query($mysqli, "SELECT * FROM mhs WHERE nim='$_GET[nim]'");
        $row = mysqli_fetch_array($hasil);
      ?>
      
      <input type="hidden" name="nim" value="<?php echo $row['nim']; ?>">

      <label for="nama">Nama</label>
      <input type="text" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>

      <label for="tgllahir">Tanggal Lahir</label>
      <input type="date" id="tgllahir" name="tgllahir" value="<?php echo $row['tgllahir']; ?>" required>

      <label for="alamat">Alamat</label>
      <input type="text" id="alamat" name="alamat" value="<?php echo $row['alamat']; ?>" required>

      <label for="agama">Agama</label>
      <select id="agama" name="agama" required>
        <?php
        $agama_list = ["Islam", "Kristen", "Katolik", "Hindu", "Budha"];
        foreach ($agama_list as $agama) {
          $selected = ($row['agama'] == $agama) ? "selected" : "";
          echo "<option value=\"$agama\" $selected>$agama</option>";
        }
        ?>
      </select>

      <div class="button-group">
        <input type="submit" value="Simpan">
        <a href="mahasiswa.php" class="button cancel">Kembali</a>
      </div>
    </form>
  </div>

</body>
</html>
