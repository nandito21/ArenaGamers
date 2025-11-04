<?php
// === Koneksi ke Database ===
$koneksi = new mysqli("localhost", "root", "", "db_arenagamers");

// Cek koneksi
if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}

// === Proses Simpan Data Berita ===
if (isset($_POST['submit'])) {
  $judul   = $koneksi->real_escape_string($_POST['judul']);
  $isi     = $koneksi->real_escape_string($_POST['isi']);
  $penulis = $koneksi->real_escape_string($_POST['penulis']);

  // Query untuk menyimpan data ke tabel tb_berita
  $sql = "INSERT INTO tb_berita (judul, isi, penulis, tanggal) 
          VALUES ('$judul', '$isi', '$penulis', NOW())";

  if ($koneksi->query($sql) === TRUE) {
    echo "
      <script>
        alert('Berita berhasil ditambahkan!');
        window.location.href = 'berita.php';
      </script>
    ";
  } else {
    echo "Error: " . $sql . "<br>" . $koneksi->error;
  }
}

$koneksi->close();
?>
