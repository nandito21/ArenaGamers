
<?php
// --- Koneksi ke Database (sementara dimatikan untuk tahap ini) ---
// $koneksi = new mysqli("localhost", "root", "", "db_arenagamers");

// if ($koneksi->connect_error) {
//   die("Koneksi gagal: " . $koneksi->connect_error);
// }

if (isset($_POST['submit'])) {
  $judul   = $_POST['judul'];
  $isi     = $_POST['isi'];
  $penulis = $_POST['penulis'];

  echo "
    <script>
      alert('Form berhasil dikirim!\\nJudul: $judul\\nPenulis: $penulis');
      window.location.href = 'berita.php';
    </script>
  ";
}
?>
