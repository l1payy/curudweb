<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Data Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
  <h2>Tambah Data Mahasiswa</h2>
  <form action="aksi_tambah_data_mahasiswa.php" method="POST">
    
    <label for="nim">NIM</label>
    <input type="text" id="nim" name="nim" required>

    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" required>

    <label for="tgllahir">Tanggal Lahir</label>
    <input type="date" id="tgllahir" name="tgllahir" required>

    <label for="alamat">Alamat</label>
    <input type="text" id="alamat" name="alamat" required>

    <label for="agama">Agama</label>
    <select id="agama" name="agama" required>
      <option value="">-- Pilih Agama --</option>
      <option value="Islam">Islam</option>
      <option value="Kristen">Kristen</option>
      <option value="Katolik">Katolik</option>
      <option value="Hindu">Hindu</option>
      <option value="Budha">Budha</option>
    </select>

    <div class="button-group">
      <input type="submit" value="Simpan">
      <a href="mahasiswa.php" class="button cancel">Kembali</a>
    </div>

  </form>
</div>

</body>
</html>
