<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Paket WiFi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e3f2fd; /* Background Biru Sangat Muda */
            font-family: 'Segoe UI', sans-serif;
        }

        /* Styling Header */
        .main-header {
            padding: 3rem 1rem;
            color: #0d47a1;
        }

        /* Custom Card Style */
        .card-paket {
            border: none;
            border-radius: 20px;
            background: white;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        /* Efek Hover: Naik sedikit + Shadow lembut */
        .card-paket:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(13, 110, 253, 0.15);
        }

        /* Garis atas biru di setiap kartu */
        .card-paket::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: #4fc3f7; /* Biru Langit Cerah */
        }

        .nama-paket {
            color: #90a4ae;
            letter-spacing: 2px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .speed-number {
            font-size: 3.5rem;
            font-weight: 800;
            color: #039be5; /* Biru Soft */
            line-height: 1;
        }

        .speed-unit {
            font-size: 1rem;
            font-weight: 600;
            color: #81d4fa;
        }

        .harga-text {
            color: #37474f;
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .harga-bulan {
            font-size: 0.8rem;
            font-weight: 400;
            color: #cfd8dc;
        }
    </style>
</head>
<body>
    <div class="container py-4"> 
        <div class="text-center main-header">
            <h2 class="fw-bold mb-2">Pilihan Paket Internet</h2>
            <p class="text-muted">Daftar harga dan kecepatan paket WiFi rumah</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card card-paket h-100 p-4 text-center">
                    <div class="card-body">
                        <div class="nama-paket text-uppercase mb-3">Paket Hemat</div>
                        <div class="mb-3">
                            <span class="speed-number">7</span>
                            <span class="speed-unit">Mbps</span>
                        </div>
                        <hr class="border-secondary opacity-10 mx-auto w-50 my-4">
                        <div class="harga-text">Rp 100.000 <span class="harga-bulan">/bln</span></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card card-paket h-100 p-4 text-center">
                    <div class="card-body">
                        <div class="nama-paket text-uppercase mb-3">Paket Mulus</div>
                        <div class="mb-3">
                            <span class="speed-number">12</span>
                            <span class="speed-unit">Mbps</span>
                        </div>
                        <hr class="border-secondary opacity-10 mx-auto w-50 my-4">
                        <div class="harga-text">Rp 115.000 <span class="harga-bulan">/bln</span></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card card-paket h-100 p-4 text-center">
                    <div class="card-body">
                        <div class="nama-paket text-uppercase mb-3">Paket Santuy</div>
                        <div class="mb-3">
                            <span class="speed-number">15</span>
                            <span class="speed-unit">Mbps</span>
                        </div>
                        <hr class="border-secondary opacity-10 mx-auto w-50 my-4">
                        <div class="harga-text">Rp 125.000 <span class="harga-bulan">/bln</span></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card card-paket h-100 p-4 text-center">
                    <div class="card-body">
                        <div class="nama-paket text-uppercase mb-3">Paket Seru</div>
                        <div class="mb-3">
                            <span class="speed-number">25</span>
                            <span class="speed-unit">Mbps</span>
                        </div>
                        <hr class="border-secondary opacity-10 mx-auto w-50 my-4">
                        <div class="harga-text">Rp 155.000 <span class="harga-bulan">/bln</span></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card card-paket h-100 p-4 text-center">
                    <div class="card-body">
                        <div class="nama-paket text-uppercase mb-3">Paket Ngebut</div>
                        <div class="mb-3">
                            <span class="speed-number">35</span>
                            <span class="speed-unit">Mbps</span>
                        </div>
                        <hr class="border-secondary opacity-10 mx-auto w-50 my-4">
                        <div class="harga-text">Rp 220.000 <span class="harga-bulan">/bln</span></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card card-paket h-100 p-4 text-center">
                    <div class="card-body">
                        <div class="nama-paket text-uppercase mb-3">Paket Gasspoll</div>
                        <div class="mb-3">
                            <span class="speed-number">50</span>
                            <span class="speed-unit">Mbps</span>
                        </div>
                        <hr class="border-secondary opacity-10 mx-auto w-50 my-4">
                        <div class="harga-text">Rp 250.000 <span class="harga-bulan">/bln</span></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card card-paket h-100 p-4 text-center border-0 shadow-sm">
                    <div class="card-body">
                        <div class="nama-paket text-uppercase mb-3 text-warning">Paket Sultan</div>
                        <div class="mb-3">
                            <span class="speed-number text-warning">100</span>
                            <span class="speed-unit text-warning">Mbps</span>
                        </div>
                        <hr class="border-secondary opacity-10 mx-auto w-50 my-4">
                        <div class="harga-text">Rp 350.000 <span class="harga-bulan">/bln</span></div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center mt-5 text-muted small">
            &copy; 2025 Layanan WiFi Rumah
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
