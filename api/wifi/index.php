<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket WiFi Rumah</title>
    <style>
        /* --- RESET & BASIC STYLE --- */
        :root {
            --primary-soft: #e0f2fe; /* Biru sangat muda */
            --primary-blue: #0ea5e9; /* Biru langit */
            --primary-dark: #0284c7; /* Biru tua untuk text */
            --text-main: #334155;    /* Abu tua */
            --bg-color: #f8fafc;     /* Putih keabu-abuan bersih */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            padding-bottom: 60px;
        }

        /* --- HEADER --- */
        header {
            text-align: center;
            padding: 60px 20px 40px;
        }

        header h1 {
            font-size: 2rem;
            color: var(--primary-dark);
            font-weight: 700;
            letter-spacing: -0.5px;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1rem;
            color: #64748b;
        }

        /* --- CONTAINER --- */
        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* --- GRID SYSTEM --- */
        .grid-paket {
            display: grid;
            gap: 20px;
            grid-template-columns: 1fr; /* Mobile */
        }

        /* Tablet */
        @media (min-width: 640px) {
            .grid-paket {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* Desktop */
        @media (min-width: 1024px) {
            .grid-paket {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        /* --- CARD STYLE (MINIMALIS) --- */
        .card {
            background: white;
            border-radius: 12px;
            padding: 30px 20px;
            text-align: center;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
        }

        .card:hover {
            border-color: var(--primary-blue);
            transform: translateY(-3px);
            box-shadow: 0 10px 30px -10px rgba(14, 165, 233, 0.15);
        }

        .packet-name {
            font-size: 1.1rem;
            font-weight: 600;
            color: #64748b;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Tampilan Kecepatan Besar */
        .speed-box {
            margin-bottom: 20px;
        }
        
        .speed-number {
            font-size: 3.5rem;
            font-weight: 800;
            color: var(--primary-dark);
            line-height: 1;
        }

        .speed-unit {
            font-size: 1rem;
            font-weight: 600;
            color: var(--primary-blue);
        }

        .divider {
            height: 1px;
            background-color: #f1f5f9;
            margin: 20px 0;
            width: 100%;
        }

        .price {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--text-main);
            margin-bottom: 25px;
        }

        .price span {
            font-size: 0.9rem;
            font-weight: normal;
            color: #94a3b8;
        }

        /* --- BUTTON --- */
        .btn {
            display: inline-block;
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: 0.2s;
            /* Style Soft Button */
            background-color: var(--primary-soft);
            color: var(--primary-dark);
        }

        .btn:hover {
            background-color: var(--primary-blue);
            color: white;
        }

        /* --- FOOTER --- */
        footer {
            margin-top: 60px;
            text-align: center;
            font-size: 0.85rem;
            color: #94a3b8;
        }
    </style>
</head>
<body>

    <header>
        <h1>Internet WiFi Rumah</h1>
        <p>Koneksi stabil, harga simpel.</p>
    </header>

    <div class="container">
        <div class="grid-paket">
            
            <div class="card">
                <div class="packet-name">Hemat</div>
                <div class="speed-box">
                    <div class="speed-number">7</div>
                    <div class="speed-unit">Mbps</div>
                </div>
                <div class="divider"></div>
                <div class="price">Rp 100.000 <span>/bulan</span></div>
                <a href="#" class="btn">Pilih Paket</a>
            </div>

            <div class="card">
                <div class="packet-name">Mulus</div>
                <div class="speed-box">
                    <div class="speed-number">12</div>
                    <div class="speed-unit">Mbps</div>
                </div>
                <div class="divider"></div>
                <div class="price">Rp 115.000 <span>/bulan</span></div>
                <a href="#" class="btn">Pilih Paket</a>
            </div>

            <div class="card">
                <div class="packet-name">Santuy</div>
                <div class="speed-box">
                    <div class="speed-number">15</div>
                    <div class="speed-unit">Mbps</div>
                </div>
                <div class="divider"></div>
                <div class="price">Rp 125.000 <span>/bulan</span></div>
                <a href="#" class="btn">Pilih Paket</a>
            </div>

            <div class="card">
                <div class="packet-name">Seru</div>
                <div class="speed-box">
                    <div class="speed-number">25</div>
                    <div class="speed-unit">Mbps</div>
                </div>
                <div class="divider"></div>
                <div class="price">Rp 155.000 <span>/bulan</span></div>
                <a href="#" class="btn">Pilih Paket</a>
            </div>

            <div class="card">
                <div class="packet-name">Ngebut</div>
                <div class="speed-box">
                    <div class="speed-number">35</div>
                    <div class="speed-unit">Mbps</div>
                </div>
                <div class="divider"></div>
                <div class="price">Rp 220.000 <span>/bulan</span></div>
                <a href="#" class="btn">Pilih Paket</a>
            </div>

            <div class="card">
                <div class="packet-name">Gasspoll</div>
                <div class="speed-box">
                    <div class="speed-number">50</div>
                    <div class="speed-unit">Mbps</div>
                </div>
                <div class="divider"></div>
                <div class="price">Rp 250.000 <span>/bulan</span></div>
                <a href="#" class="btn">Pilih Paket</a>
            </div>

            <div class="card">
                <div class="packet-name">Sultan</div>
                <div class="speed-box">
                    <div class="speed-number">100</div>
                    <div class="speed-unit">Mbps</div>
                </div>
                <div class="divider"></div>
                <div class="price">Rp 350.000 <span>/bulan</span></div>
                <a href="#" class="btn">Pilih Paket</a>
            </div>

        </div>
    </div>

    <footer>
        <p>&copy; 2025 Layanan Internet WiFi</p>
    </footer>

</body>
</html>