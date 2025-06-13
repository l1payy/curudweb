<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Mahasiswa</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
  <h2>Data Mahasiswa</h2>
  
  <div class="actions">
    <a href="tambah_data_mahasiswa.php" class="button add">+ Tambah Data</a>
  </div>

  <table class="data-table">
    <thead>
      <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Tgl Lahir</th>
        <th>Alamat</th>
        <th>Agama</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include('config.php');
        $hasil = mysqli_query($mysqli, "SELECT * FROM mhs");
        $no = 1;
        while ($row = mysqli_fetch_array($hasil)) {
          echo "<tr>
            <td>$no</td>
            <td>{$row['nim']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['tgllahir']}</td>
            <td>{$row['alamat']}</td>
            <td>{$row['agama']}</td>
            <td>
              <a href='edit_data_mahasiswa.php?nim={$row['nim']}' class='button small'>Edit</a>
              <a href='aksi_hapus.php?nim={$row['nim']}' class='button small delete' onclick=\"return confirm('Yakin ingin menghapus data ini?')\">Delete</a>
            </td>
          </tr>";
          $no++;
        }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
