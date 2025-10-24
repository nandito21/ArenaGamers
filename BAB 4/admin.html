<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ArenaGamers - Admin Dashboard</title>
  <link rel="stylesheet" href="CSS/admin.css">
  <style>
    body.dark {
      background-color: #121212;
      color: #f1f1f1;
    }
    .dark .navbar {
      background: #222;
    }
    .dark table {
      background: #333;
      color: #fff;
    }
  </style>
</head>

<body>
  <header class="navbar">
    <h1 id="judulAdmin">Admin Panel</h1>
    <nav>
      <a href="#" id="menuDashboard">Dashboard</a>
      <a href="#" id="menuCategories">Categories</a>
      <a href="#" id="menuTransaction">Transaction</a>
      <a href="#" id="menuLogout">Logout</a>
    </nav>
  </header>

  <main class="container">
    <h2 id="judulHalaman">Dashboard</h2>
    <div id="kontenUtama" class="dashboard-welcome">
      <h1 id="salamAdmin">Selamat Datang, Admin 👑</h1>
      <p id="waktuDunia"></p>
    </div>
  </main>

  <footer>
    <p>&copy; 2025 ArenaGamers Admin. All rights reserved.</p>
  </footer>

  <div id="snackbar">Selamat Datang, Admin!</div>

  <script>
    const judulHalaman = document.getElementById("judulHalaman");
    const konten = document.getElementById("kontenUtama");
    const snackbar = document.getElementById("snackbar");

    // === Fungsi untuk menampilkan toast ===
    function showToast(pesan) {
      snackbar.textContent = pesan;
      snackbar.className = "show";
      setTimeout(() => snackbar.className = snackbar.className.replace("show", ""), 3000);
    }

    // === Ambil / simpan nama admin ===
    let namaAdmin = localStorage.getItem("namaAdmin");
    if (!namaAdmin) {
      namaAdmin = prompt("Masukkan nama Admin:");
      if (namaAdmin && namaAdmin.trim() !== "") {
        localStorage.setItem("namaAdmin", namaAdmin);
      } else {
        namaAdmin = "Admin";
      }
    }

    alert(`Login berhasil! Selamat datang, ${namaAdmin}`);

    // === Fungsi salam otomatis ===
    function getSalam() {
      const now = new Date();
      const jam = now.getHours();
      if (jam >= 5 && jam < 12) return "Selamat Pagi";
      if (jam >= 12 && jam < 15) return "Selamat Siang";
      if (jam >= 15 && jam < 18) return "Selamat Sore";
      return "Selamat Malam";
    }

    // === Fungsi tampilkan waktu real-time ===
    function updateWaktu() {
      const now = new Date();
      const options = {
        weekday: 'long', year: 'numeric', month: 'long',
        day: 'numeric', hour: '2-digit', minute: '2-digit',
        second: '2-digit', timeZoneName: 'short'
      };
      document.getElementById("waktuDunia").textContent = now.toLocaleString("id-ID", options);
    }

    function tampilkanSalam() {
      const salam = getSalam();
      document.getElementById("salamAdmin").textContent = `${salam}, ${namaAdmin} 👑`;
    }

    tampilkanSalam();
    updateWaktu();
    setInterval(updateWaktu, 1000);
    setInterval(tampilkanSalam, 60000);
    window.onload = () => showToast(`Selamat datang, ${namaAdmin}!`);

    // ===== MENU DASHBOARD =====
    document.getElementById("menuDashboard").addEventListener("click", () => {
      judulHalaman.textContent = "Dashboard";
      konten.innerHTML = `
        <div class="dashboard-welcome">
          <h1 id="salamAdmin">${getSalam()}, ${namaAdmin} 👑</h1>
          <p id="waktuDunia"></p>
        </div>
      `;
      updateWaktu();
      setInterval(updateWaktu, 1000);
      showToast("Tampilan Dashboard");
    });

    // ===== MENU CATEGORIES (Async Fetch) =====
    document.getElementById("menuCategories").addEventListener("click", async () => {
      judulHalaman.textContent = "Data Pemain per Kategori Game";
      try {
        const response = await fetch("data/pemain.json");
        const data = await response.json();

        let rows = data.map(p =>
          `<tr ondblclick="showDetail('${p.nama}','${p.kategori}','${p.level}')">
            <td>${p.id}</td><td>${p.nama}</td><td>${p.kategori}</td><td>${p.level}</td>
          </tr>`).join("");

        konten.innerHTML = `
          <table class="data-table">
            <thead>
              <tr><th>ID Pemain</th><th>Nama</th><th>Kategori</th><th>Level</th></tr>
            </thead>
            <tbody>${rows}</tbody>
          </table>`;
        showToast("Data pemain berhasil dimuat (fetch)");
      } catch (error) {
        konten.innerHTML = "<p style='color:red;'>Gagal memuat data pemain.</p>";
      }
    });

    // ===== POPUP DETAIL PEMAIN (double-click event) =====
    function showDetail(nama, kategori, level) {
      alert(`Detail Pemain:\nNama: ${nama}\nGame: ${kategori}\nLevel: ${level}`);
    }

    // ===== MENU TRANSACTION =====
    document.getElementById("menuTransaction").addEventListener("click", () => {
      judulHalaman.textContent = "Riwayat Transaksi Pemain";
      konten.innerHTML = `
        <table class="data-table">
          <thead>
            <tr><th>ID</th><th>Nama</th><th>Game</th><th>Nominal</th><th>Status</th></tr>
          </thead>
          <tbody>
            <tr><td>TRX001</td><td>Fauzan</td><td>PUBG Mobile</td><td>Rp 100.000</td><td class="success">Sukses</td></tr>
            <tr><td>TRX002</td><td>Rosales</td><td>PUBG Mobile</td><td>Rp 250.000</td><td class="pending">Pending</td></tr>
            <tr><td>TRX003</td><td>Verceli</td><td>Mobile Legends</td><td>Rp 150.000</td><td class="success">Sukses</td></tr>
            <tr><td>TRX004</td><td>Yogi</td><td>Free Fire</td><td>Rp 90.000</td><td class="failed">Gagal</td></tr>
          </tbody>
        </table>`;
      showToast("Tampilan Riwayat Transaksi");
    });

    // ===== LOGOUT (popup confirm) =====
    document.getElementById("menuLogout").addEventListener("click", () => {
      const konfirmasi = confirm("Apakah kamu yakin ingin logout?");
      if (konfirmasi) {
        localStorage.removeItem("namaAdmin");
        showToast("Berhasil Logout!");
        window.location.href = "login.html";
      } else {
        showToast("Logout dibatalkan.");
      }
    });

    // ===== EVENT MOUSEOVER MENU =====
    document.querySelectorAll("nav a").forEach(menu => {
      menu.addEventListener("mouseover", () => showToast(`Kamu mengarahkan mouse ke ${menu.textContent}`));
    });

    // ===== EVENT KEYDOWN (T = toggle tema) =====
    document.addEventListener("keydown", (e) => {
      if (e.key.toLowerCase() === "t") {
        document.body.classList.toggle("dark");
        const tema = document.body.classList.contains("dark") ? "dark" : "light";
        sessionStorage.setItem("temaAdmin", tema);
        showToast(`Tema diganti ke: ${tema}`);
      }
    });

    // ===== MUAT TEMA DARI SESSION STORAGE =====
    const temaTersimpan = sessionStorage.getItem("temaAdmin");
    if (temaTersimpan === "dark") {
      document.body.classList.add("dark");
    }
  </script>
</body>
</html>