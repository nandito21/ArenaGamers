<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berita Gaming - ArenaGamers</title>
  <link rel="stylesheet" href="../CSS/style.css">
  <style>
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

    <?php
      // === Simulasi Proses Tambah Berita (tanpa database) ===
      if (isset($_POST['submit'])) {
        $judul   = htmlspecialchars($_POST['judul']);
        $isi     = htmlspecialchars($_POST['isi']);
        $penulis = htmlspecialchars($_POST['penulis']);

        echo "
          <script>
            alert('Berita berhasil dikirim!\\nJudul: $judul\\nPenulis: $penulis');
          </script>
        ";
      }
    ?>

    <hr style="margin: 30px 0; border: 1px solid #00c3ff;">

    <h3>Daftar Berita Gaming (Contoh)</h3>
    <table id="tabelBerita">
      <tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tanggal</th>
        <th>Aksi</th>
      </tr>

      <!-- Data dummy contoh -->
      <tr>
        <td>1</td>
        <td>Update Esports 2025</td>
        <td>Admin</td>
        <td>2025-11-02</td>
        <td><a href="#">Hapus</a></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Turnamen Valorant Global</td>
        <td>Reno</td>
        <td>2025-10-28</td>
        <td><a href="#">Hapus</a></td>
      </tr>
    </table>
  </div>

</body>
</html>
