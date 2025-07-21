<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Portofolio | Syarif A. Taqwim</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f8f9fa;
      color: #212529;
      transition: background-color 0.3s, color 0.3s;
      min-height: 100vh;
    }
    body.dark-mode {
      background-color: #121212;
      color: #e0e0e0;
    }
    /* Navbar */
    .navbar {
      background-color: #fff;
      transition: background-color 0.3s;
    }
    body.dark-mode .navbar {
      background-color: #1f1f1f;
    }
    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      color: inherit !important;
    }
    .nav-link {
      color: #212529;
      transition: color 0.3s;
    }
    .nav-link:hover, .nav-link:focus {
      color: #000;
    }
    body.dark-mode .nav-link {
      color: #ccc;
    }
    body.dark-mode .nav-link:hover, body.dark-mode .nav-link:focus {
      color: #fff;
    }
    /* Section Titles */
    .section-title {
      border-left: 4px solid #6c757d;
      padding-left: 0.75rem;
      margin-bottom: 1rem;
      font-weight: 600;
      font-size: 1.5rem;
      color: inherit;
    }
    /* Cards */
    .card {
      background-color: #fff;
      border: none;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      transition: background-color 0.3s, color 0.3s;
      color: #212529;
    }
    .card:hover {
      background-color: #e9ecef;
    }
    body.dark-mode .card {
      background-color: #1e1e1e;
      color: #ccc;
      box-shadow: 0 2px 10px rgba(255,255,255,0.1);
    }
    body.dark-mode .card:hover {
      background-color: #2c2c2c;
    }
    /* Links */
    a {
      color: #212529;
      text-decoration: none;
      transition: color 0.3s;
    }
    a:hover, a:focus {
      color: #000;
      text-decoration: underline;
    }
    body.dark-mode a {
      color: #ccc;
    }
    body.dark-mode a:hover, body.dark-mode a:focus {
      color: #fff;
      text-decoration: underline;
    }
    /* Header */
    header {
      background-color: #fff;
      border-bottom: 1px solid #dee2e6;
      transition: background-color 0.3s;
      padding: 3rem 1rem;
      color: #212529;
    }
    body.dark-mode header {
      background-color: #1f1f1f;
      border-color: #444;
      color: #eee;
    }
    header h1 {
      font-size: 2.5rem;
      font-weight: 700;
    }
    header p {
      font-size: 1.1rem;
      color: #6c757d;
    }
    body.dark-mode header p {
      color: #bbb;
    }
    /* Footer */
    footer {
      padding: 1.5rem 1rem;
      text-align: center;
      color: #6c757d;
      border-top: 1px solid #dee2e6;
      transition: color 0.3s, border-color 0.3s;
    }
    body.dark-mode footer {
      color: #999;
      border-color: #444;
    }
    /* Theme Toggle Button */
    .theme-toggle-btn {
      border: none;
      background: transparent;
      font-size: 1.3rem;
      cursor: pointer;
      color: inherit;
      transition: color 0.3s;
    }
    .theme-toggle-btn:focus {
      outline: none;
      color: #0d6efd;
    }
    /* Responsive paddings */
    main > section {
      padding-top: 3rem;
      padding-bottom: 3rem;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg sticky-top shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#">Syarif A. Taqwim</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="#keahlian">Keahlian</a></li>
          <li class="nav-item"><a class="nav-link" href="#proyek">Proyek</a></li>
          <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
          <li class="nav-item ms-3">
            <button class="theme-toggle-btn" aria-label="Toggle light/dark mode" id="themeToggleBtn">
              <i id="themeIcon" class="fas fa-moon"></i>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    <div class="container text-center">
      <h1>Syarif A. Taqwim</h1>
      <p>Web & Mobile Developer | IoT Maker | Network Engineer | Pembelajar AI</p>
    </div>
  </header>

  <main>
    <section class="container" id="tentang">
      <div class="section-title">Tentang Saya</div>
      <p>
        Saya adalah seorang pengembang perangkat lunak dengan minat dalam Web Development, Mobile App, IoT, dan Artificial Intelligence.
        Saya terbiasa bekerja dengan Laravel, Android Studio (Volley, SQLite), serta membangun sistem IoT menggunakan ESP32 & Arduino.
        Saya juga memiliki keahlian di bidang jaringan seperti konfigurasi server, Mikrotik, VoIP, dan pengelolaan infrastruktur jaringan. Saat ini saya sedang memperdalam Flutter dan Python untuk pengembangan lebih lanjut.
      </p>
    </section>

    <section class="container" id="keahlian">
      <div class="section-title">Keahlian Teknis</div>
      <div class="row g-4">
        <div class="col-md-6">
          <div class="card p-4 h-100">
            <h5>Web Development</h5>
            <p>Laravel, PHP Native, REST API, MySQL, Authentication, Hosting (cPanel, Niagahoster, GitHub Pages)</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card p-4 h-100">
            <h5>Mobile App</h5>
            <p>Android Studio (Kotlin), Volley, SQLite, API Integration, Flutter (belajar)</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card p-4 h-100">
            <h5>IoT & Embedded</h5>
            <p>ESP32, Arduino, Sensor Ultrasonik, DS18B20, Flow Sensor, Serial Communication, Monitoring</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card p-4 h-100">
            <h5>AI & Tools</h5>
            <p>Python (Dasar ML), Google Colab, VS Code, Git, Bootstrap, DomPDF</p>
          </div>
        </div>
        <div class="col-12">
          <div class="card p-4 h-100">
            <h5>Network Engineering</h5>
            <p>Web Server, DHCP Server, Mail Server, PABX Server, CCTV Setup, VOIP, Mikrotik Configuration, Infrastruktur Jaringan, Network Management</p>
          </div>
        </div>
      </div>
    </section>

    <section class="container" id="proyek">
      <div class="section-title">Proyek Unggulan</div>
      <div class="row g-4">
        <div class="col-md-6">
          <div class="card p-4">
            <h5>Absensi Pintar Berbasis IoT + Web</h5>
            <p>Sistem absensi menggunakan RFID + ESP32 yang terhubung ke Laravel untuk pencatatan otomatis dan monitoring admin.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card p-4">
            <h5>Smart Marketplace Limbah (Laravel)</h5>
            <p>Aplikasi pengelolaan dan transaksi limbah dengan fitur pesan antar pengguna, login, CRUD limbah, dan laporan transaksi.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card p-4">
            <h5>Pengukuran Ketinggian & Suhu Waduk</h5>
            <p>ESP32 + sensor ultrasonik + DS18B20 untuk monitoring volume dan suhu air waduk secara real-time.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card p-4">
            <h5>Flutter App (Progres)</h5>
            <p>Belajar membangun UI interaktif untuk Android menggunakan Flutter & Dart, direncanakan integrasi IoT.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="container" id="kontak">
      <div class="section-title">Kontak</div>
      <ul class="list-unstyled">
        <li><i class="fas fa-envelope me-2"></i>syarifahsanit@gmail.com</li>
        <li><i class="fas fa-phone me-2"></i>0878-4294-9212</li>
        <li><i class="fas fa-location-dot me-2"></i>Tulungagung, Jawa Timur</li>
      </ul>
    </section>
  </main>

  <footer>
    &copy; 2025 Syarif A. Taqwim
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const themeToggleBtn = document.getElementById('themeToggleBtn');
    const themeIcon = document.getElementById('themeIcon');

    function toggleTheme() {
      document.body.classList.toggle('dark-mode');
      if(document.body.classList.contains('dark-mode')){
        themeIcon.classList.remove('fa-moon');
        themeIcon.classList.add('fa-sun');
        localStorage.setItem('theme', 'dark');
      } else {
        themeIcon.classList.remove('fa-sun');
        themeIcon.classList.add('fa-moon');
        localStorage.setItem('theme', 'light');
      }
    }

    // Load saved theme from localStorage
    document.addEventListener('DOMContentLoaded', () => {
      if(localStorage.getItem('theme') === 'dark'){
        document.body.classList.add('dark-mode');
        themeIcon.classList.remove('fa-moon');
        themeIcon.classList.add('fa-sun');
      }
    });

    themeToggleBtn.addEventListener('click', toggleTheme);
  </script>
</body>
</html>
