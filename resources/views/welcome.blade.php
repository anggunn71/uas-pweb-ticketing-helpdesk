<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ticketing Helpdesk</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        .hero {
            min-height: 620px;
            background:
                linear-gradient(135deg, rgba(10, 25, 47, 0.92), rgba(220, 38, 38, 0.88)),
                url('https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1600&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding-bottom: 60px;
        }

        .navbar {
            height: 85px;
            display: flex;
            align-items: center;
            padding: 0 90px;
        }

        .logo {
            font-size: 30px;
            font-weight: 800;
        }

        .logo span {
            color: #ff4757;
        }

        .menu {
            margin-left: 55px;
            display: flex;
            gap: 28px;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-weight: 600;
        }

        .login {
            margin-left: auto;
            background: white;
            color: #dc2626;
            padding: 12px 20px;
            border-radius: 30px;
            font-weight: bold;
        }

        .hero-content {
            padding: 80px 90px 30px;
            max-width: 850px;
        }

        .badge {
            display: inline-block;
            background: rgba(255,255,255,0.18);
            padding: 10px 18px;
            border-radius: 30px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .hero-content h1 {
            font-size: 52px;
            line-height: 1.15;
            margin: 0 0 20px;
        }

        .hero-content p {
            font-size: 20px;
            line-height: 1.7;
            color: #f3f4f6;
        }

        .hero-actions {
            display: flex;
            gap: 16px;
            margin-top: 30px;
        }

        .btn {
            padding: 15px 24px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: bold;
        }

        .btn-secondary {
            background: white;
            color: #111827;
        }

        .stats {
            margin: -55px 90px 40px;
            background: white;
            border-radius: 18px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            overflow: hidden;
        }

        .stat {
            padding: 28px;
            border-right: 1px solid #eee;
        }

        .stat:last-child {
            border-right: none;
        }

        .stat h2 {
            margin: 0;
            color: #dc2626;
            font-size: 34px;
        }

        .stat p {
            margin: 8px 0 0;
            color: #6b7280;
        }

        .section {
            padding: 35px 90px 70px;
        }

        .section-title {
            margin-bottom: 28px;
        }

        .section-title h2 {
            font-size: 34px;
            margin: 0;
        }

        .section-title p {
            color: #6b7280;
        }

        .modules {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 22px;
        }

        .module-card {
            background: white;
            border-radius: 18px;
            padding: 26px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            cursor: pointer;
            min-height: 260px;
            position: relative;
            overflow: hidden;
        }

        .module-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 6px;
            width: 100%;
            background: linear-gradient(90deg, #ef233c, #ff9f1c);
        }

        .module-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 18px 35px rgba(0,0,0,0.16);
        }

        .icon {
            width: 62px;
            height: 62px;
            background: #fee2e2;
            color: #dc2626;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            margin-bottom: 22px;
        }

        .module-card small {
            color: #dc2626;
            font-weight: bold;
        }

        .module-card h3 {
            font-size: 23px;
            margin: 10px 0;
        }

        .module-card p {
            color: #6b7280;
            line-height: 1.6;
            font-size: 15px;
        }

        .module-card a {
            position: absolute;
            bottom: 22px;
            color: #dc2626;
            font-weight: bold;
            text-decoration: none;
        }

        .workflow {
            margin-top: 55px;
            background: #111827;
            color: white;
            border-radius: 22px;
            padding: 35px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }

        .workflow h2 {
            margin-top: 0;
            font-size: 30px;
        }

        .step {
            background: rgba(255,255,255,0.08);
            padding: 18px;
            border-radius: 14px;
            margin-bottom: 14px;
        }

        .step b {
            color: #ff9f1c;
        }

        .floating-chat {
            position: fixed;
            right: 45px;
            bottom: 45px;
            width: 72px;
            height: 72px;
            border-radius: 50%;
            background: #34c759;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 12px 25px rgba(0,0,0,0.25);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .floating-chat:hover {
            transform: scale(1.12);
            background: #28a745;
        }

        .floating-chat svg {
            width: 34px;
            height: 34px;
        }

        @media (max-width: 1100px) {
            .modules {
                grid-template-columns: repeat(2, 1fr);
            }

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .workflow {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<div class="hero">
    <div class="navbar">
        <div class="logo">Ticket<span>Desk</span></div>

        <div class="menu">
            <a href="/">Dashboard</a>
            <a href="#">Klien</a>
            <a href="#">Agen</a>
            <a href="/tiket">Tiket</a>
            <a href="/kategori-masalah">Kategori</a>
            <a href="#">Solusi</a>
        </div>

        <div class="login">Sign in / Register</div>
    </div>

    <div class="hero-content">
        <div class="badge">🎫 Aplikasi Ticketing & Helpdesk</div>

        <h1>Kelola Laporan Masalah Lebih Cepat dan Terorganisir</h1>

        <p>
            Sistem TicketDesk membantu klien membuat tiket,
            agen menangani laporan, serta memantau status
            masalah sampai mendapatkan solusi terbaik.
        </p>

        <div class="hero-actions">
            <a href="#modul" class="btn btn-secondary">
                Lihat Semua Modul
            </a>
        </div>
    </div>
</div>

<div class="stats">
    <div class="stat">
        <h2>5</h2>
        <p>Modul Utama</p>
    </div>

    <div class="stat">
        <h2>24/7</h2>
        <p>Layanan Bantuan</p>
    </div>

    <div class="stat">
        <h2>Open</h2>
        <p>Status Tiket Aktif</p>
    </div>

    <div class="stat">
        <h2>Fast</h2>
        <p>Respon Agen</p>
    </div>
</div>

<div class="section" id="modul">

    <div class="section-title">
        <h2>Modul Ticketing & Helpdesk</h2>
        <p>Fitur utama kelompok PRJ-05 dalam sistem helpdesk.</p>
    </div>

    <div class="modules">

        <div class="module-card">
            <div class="icon">👤</div>

            <small>PKG-05-1</small>

            <h3>Modul Klien</h3>

            <p>
                Mengelola data klien atau pengguna
                yang membuat laporan bantuan.
            </p>

            <a href="#">Buka Modul →</a>
        </div>

        <div class="module-card">
            <div class="icon">🧑‍💻</div>

            <small>PKG-05-2</small>

            <h3>Modul Agen</h3>

            <p>
                Mengelola data agen yang menangani
                dan memproses tiket helpdesk.
            </p>

            <a href="#">Buka Modul →</a>
        </div>

        <div class="module-card"
             onclick="window.location.href='/tiket'">

            <div class="icon">🎫</div>

            <small>PKG-05-3</small>

            <h3>Modul Tiket</h3>

            <p>
                Mengelola laporan masalah,
                prioritas, status, dan detail tiket.
            </p>

            <a href="/tiket">Buka Modul →</a>
        </div>

        <div class="module-card"
             onclick="window.location.href='/kategori-masalah'">

            <div class="icon">📂</div>

            <small>PKG-05-4</small>

            <h3>Modul Kategori</h3>

            <p>
                Mengelompokkan masalah seperti
                hardware, software, jaringan, dan akun.
            </p>

            <a href="/kategori-masalah">
                Buka Modul →
            </a>
        </div>

        <div class="module-card">
            <div class="icon">💡</div>

            <small>PKG-05-5</small>

            <h3>Modul Solusi</h3>

            <p>
                Mengelola solusi atau penyelesaian
                dari setiap tiket yang dilaporkan.
            </p>

            <a href="#">Buka Modul →</a>
        </div>

    </div>

    <div class="workflow">

        <div>
            <h2>Alur Kerja Helpdesk</h2>

            <p>
                Setiap laporan akan masuk sebagai tiket,
                lalu diproses oleh agen berdasarkan kategori
                dan prioritas masalah.
            </p>
        </div>

        <div>
            <div class="step">
                <b>1.</b> Klien membuat laporan masalah.
            </div>

            <div class="step">
                <b>2.</b> Tiket masuk dengan status Open.
            </div>

            <div class="step">
                <b>3.</b> Agen memproses tiket sesuai kategori.
            </div>

            <div class="step">
                <b>4.</b> Solusi diberikan dan tiket diselesaikan.
            </div>
        </div>

    </div>
</div>

<div class="floating-chat">
    <svg viewBox="0 0 24 24" fill="white">
        <path d="M20 2H4C2.9 2 2 2.9 2 4v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/>
    </svg>
</div>

</body>
</html>