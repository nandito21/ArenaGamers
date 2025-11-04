<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berita Gaming - ArenaGamers</title>
  <link rel="stylesheet" href="../CSS/style.css">
  <style>
    /* Tambahan gaya untuk tampilan tabel */
    body {
      background-color: #000f63;
      color: white;
      font-family: Arial, sans-serif;
      text-align: center;
    }

    .navbar {
      background-color: #001f80;
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar a {
      color: white;
      text-decoration: none;
    }

    .table-container {
      width: 80%;
      margin: 40px auto;
      background: #0218a5;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table, th, td {
      border: 1px solid white;
    }

    th, td {
      padding: 10px;
      text-align: center;
    }

    form {
      margin-bottom: 20px;
    }

    input, textarea, button {
      padding: 8px;
      margin: 5px;
      border-radius: 5px;
      border: none;
    }

    textarea {
      width: 90%;
      height: 100px;
    }

    button {
      background-color: #00c3ff;
      color: white;
      cursor: pointer;
    }

    button:hover {
      background-color: #008fcc;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <h2>📢 Manajemen Berita Gaming</h2>
    <a href="../dashboard.php">Kembali ke Dashboard</a>
  </div>

  <div class="table-container">
    <h3>Tambah Berita Baru</h3>

    <!-- 🔹 FORM TAMBAH BERITA -->
    <form method="POST">
      <label>Judul Berita:</label><br>
      <input type="text" name="judul" required><br>

      <label>Isi Berita:</label><br>
      <textarea name="isi" required></textarea><br>

      <label>Penulis:</label><br>
      <input type="text" name="penulis" required><br>

      <button type="submit" name="submit">Simpan Berita</button>
    </form>

    <hr style="margin: 30px 0; border: 1px solid #00c3ff;">

    <h3>Daftar Berita Gaming</h3>

    <table id="tabelBerita">
      <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>

      <?php
        // === Koneksi Database ===
        $conn = new mysqli("localhost", "root", "", "db_arenagamers");
        if ($conn->connect_error) {
          die("Koneksi gagal: " . $conn->connect_error);
        }

        // === Proses Tambah Berita ===
        if (isset($_POST['submit'])) {
          $judul = $conn->real_escape_string($_POST['judul']);
          $isi = $conn->real_escape_string($_POST['isi']);
          $penulis = $conn->real_escape_string($_POST['penulis']);

          $sql = "INSERT INTO tb_berita (judul, isi, penulis, tanggal) VALUES ('$judul', '$isi', '$penulis', NOW())";
          if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Berita berhasil ditambahkan!'); window.location.href='berita.php';</script>";
          } else {
            echo "Error: " . $conn->error;
          }
        }

        // === Ambil Data Berita ===
        $query = $conn->query("SELECT * FROM tb_berita ORDER BY tanggal DESC");
        $no = 1;
        while ($data = $query->fetch_assoc()) {
          echo "
            <tr>
              <td>{$no}</td>
              <td>{$data['judul']}</td>
              <td>{$data['penulis']}</td>
              <td>{$data['tanggal']}</td>
              <td>
                <a href='hapus_berita.php?id={$data['id']}' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
              </td>
            </tr>
          ";
          $no++;
        }
        $conn->close();
      ?>
    </table>
  </div>

</body>
</html>
