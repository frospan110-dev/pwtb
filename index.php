<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PinjamCepat - Solusi Dana Terpercaya</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header / Navbar -->
    <header class="navbar">
        <div class="logo">⚡ PinjamCepat</div>
        <nav class="nav-links">
            <a href="#home">Beranda</a>
            <a href="#fitur">Fitur</a>
            <a href="#simulasi">Simulasi</a>
            <a href="#paket">Paket</a>
            <a href="#faq">FAQ</a>
        </nav>
        <div class="nav-buttons">
            <button class="btn btn-outline" onclick="alert('Fitur Masuk')">Masuk</button>
            <button class="btn btn-primary" onclick="alert('Fitur Daftar')">Daftar</button>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <span class="badge">🚀 Proses Cepat 5 Menit Cair</span>
            <h1>Pinjaman Uang Cepat & Tanpa Ribet</h1>
            <p>Dapatkan dana tunai hingga Rp 50.000.000 dengan bunga rendah dan tenor fleksibel. Terpercaya untuk seluruh masyarakat Indonesia.</p>
            
            <div class="hero-action-buttons">
                <button class="btn btn-primary btn-large" onclick="alert('Mengarahkan ke Form Pengajuan...')">Ajukan Pinjaman Sekarang</button>
                <button class="btn btn-secondary btn-large" onclick="alert('Menghubungi Customer Service...')">💬 Hubungi CS</button>
            </div>
            
            <div class="quick-amounts">
                <p>Pilih Nominal Cepat:</p>
                <div class="amount-tags">
                    <button class="tag-btn" onclick="setNominal('1.000.000')">Rp 1 Juta</button>
                    <button class="tag-btn" onclick="setNominal('5.000.000')">Rp 5 Juta</button>
                    <button class="tag-btn" onclick="setNominal('10.000.000')">Rp 10 Juta</button>
                    <button class="tag-btn" onclick="setNominal('25.000.000')">Rp 25 Juta</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Simulasi Pinjaman Section -->
    <section id="simulasi" class="section">
        <h2>Kalkulator Simulasi Pinjaman</h2>
        <p class="section-desc">Hitung estimasi angsuran bulanan kamu dengan mudah.</p>
        
        <div class="calculator-card">
            <div class="calc-group">
                <label for="nominal">Jumlah Pinjaman:</label>
                <input type="text" id="nominal" value="Rp 5.000.000" readonly>
            </div>

            <div class="calc-group">
                <label>Pilih Tenor (Bulan):</label>
                <div class="tenor-buttons">
                    <button class="btn-tenor active" onclick="selectTenor(this)">3 Bulan</button>
                    <button class="btn-tenor" onclick="selectTenor(this)">6 Bulan</button>
                    <button class="btn-tenor" onclick="selectTenor(this)">12 Bulan</button>
                    <button class="btn-tenor" onclick="selectTenor(this)">24 Bulan</button>
                </div>
            </div>

            <div class="calc-result">
                <span>Estimasi Cicilan per Bulan:</span>
                <h3 id="hasil-cicilan">Rp 1.750.000 / bln</h3>
            </div>

            <button class="btn btn-primary btn-block" onclick="alert('Lanjut ke tahap pengisian data!')">Ambil Pinjaman Ini</button>
        </div>
    </section>

    <!-- Paket Pinjaman Section -->
    <section id="paket" class="section bg-light">
        <h2>Pilihan Paket Pinjaman</h2>
        <p class="section-desc">Sesuaikan dengan kebutuhan finansial kamu.</p>

        <div class="cards-grid">
            <div class="card">
                <h3>Pinjaman Kilat</h3>
                <p class="price">s/d Rp 5 Juta</p>
                <ul>
                    <li>✓ Tanpa Jaminan</li>
                    <li>✓ Cair dalam 15 Menit</li>
                    <li>✓ Tenor max 3 Bulan</li>
                </ul>
                <button class="btn btn-outline btn-block" onclick="alert('Memilih Paket Kilat')">Pilih Paket</button>
            </div>

            <div class="card card-featured">
                <span class="populer">Paling Populer</span>
                <h3>Pinjaman Usaha</h3>
                <p class="price">s/d Rp 25 Juta</p>
                <ul>
                    <li>✓ Bunga Rendah 0.8%</li>
                    <li>✓ Syarat Mudah</li>
                    <li>✓ Tenor hingga 12 Bulan</li>
                </ul>
                <button class="btn btn-primary btn-block" onclick="alert('Memilih Paket Usaha')">Pilih Paket</button>
            </div>

            <div class="card">
                <h3>Pinjaman Mapan</h3>
                <p class="price">s/d Rp 50 Juta</p>
                <ul>
                    <li>✓ Limit Sangat Besar</li>
                    <li>✓ Pendampingan Finansial</li>
                    <li>✓ Tenor hingga 24 Bulan</li>
                </ul>
                <button class="btn btn-outline btn-block" onclick="alert('Memilih Paket Mapan')">Pilih Paket</button>
            </div>
        </div>
    </section>

    <!-- FAQ Interactive Section -->
    <section id="faq" class="section">
        <h2>Bantuan & Pertanyaan</h2>
        <div class="faq-buttons">
            <button class="btn btn-secondary" onclick="alert('Syarat: KTP, Usia min 21 thn, Memiliki Rekening Bank.')">📋 Apa saja syaratnya?</button>
            <button class="btn btn-secondary" onclick="alert('Proses verifikasi butuh waktu sekitar 5-15 menit.')">⏱️ Berapa lama proses cair?</button>
            <button class="btn btn-secondary" onclick="alert('Bunga mulai dari 0.8% per bulan tergantung jenis paket.')">💰 Berapa bunganya?</button>
            <button class="btn btn-secondary" onclick="alert('Aman! Data kamu terenkripsi dengan standar keamanan tinggi.')">🔒 Apakah data saya aman?</button>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo date("Y"); ?> PinjamCepat - Syauqi & Fahri Dev. All Rights Reserved.</p>
    </footer>

    <script>
        function setNominal(amount) {
            document.getElementById('nominal').value = 'Rp ' + amount;
        }

        function selectTenor(element) {
            let buttons = document.querySelectorAll('.btn-tenor');
            buttons.forEach(btn => btn.classList.remove('active'));
            element.classList.add('active');
        }
    </script>
</body>
</html>