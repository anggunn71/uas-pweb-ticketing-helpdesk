<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ticketing Helpdesk</title>

    <style>

        *{
            box-sizing:border-box;
        }

        body{
            margin:0;
            font-family:'Segoe UI',Arial,sans-serif;
            background:#f4f7fb;
            color:#1f2937;
        }

        .hero{
            min-height:620px;
            background:
            linear-gradient(135deg, rgba(10,25,47,.92), rgba(220,38,38,.88)),
            url('https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1600&q=80');

            background-size:cover;
            background-position:center;
            color:white;
            padding-bottom:60px;
        }

        .navbar {
            height: 82px;
            display: flex;
            align-items: center;
            padding: 0 90px;
        }

        .logo {
            font-size: 30px;
            font-weight: 900;
            color: white;
            white-space: nowrap;
            letter-spacing: 1px;
        }

        .logo span {
            color: #ff4757;
        }

        .menu {
            margin-left: 70px;
            display: flex;
            gap: 34px;
            align-items: center;
        }

        .menu a {
            color: white;
            text-decoration: none;
            font-weight: 800;
            font-size: 17px;
        }

        .menu a:hover {
            color: #ff4757;
        }

        .hero-content {
            padding: 55px 90px 20px;
            max-width: 850px;
        }

        .badge {
            display: inline-block;
            background: rgba(255,255,255,0.16);
            padding: 11px 22px;
            border-radius: 30px;
            margin-bottom: 24px;
            font-weight: 800;
        }

        .hero-content h1 {
            font-size: 44px;
            line-height: 1.18;
            margin: 0 0 18px;
            font-weight: 900;
        }

        .hero-content p {
            font-size: 18px;
            line-height: 1.7;
            color: #f3f4f6;
            max-width: 780px;
        }

        .btn {
            border: none;
            border-radius: 7px;
            padding: 10px 16px;
            font-size: 14px;
            font-weight: 800;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            background: white;
            color: #111827;
        }

        .stats {
            margin: -35px 90px 40px;
            background: white;
            border-radius: 18px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
            display: grid;
            grid-template-columns: repeat(4,1fr);
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
            grid-template-columns: repeat(5,1fr);
            gap: 22px;
        }

        .module-card {
            background: white;
            border-radius: 18px;
            padding: 26px;
            box-shadow: 0 8px 25px rgba(0,0,0,.08);
            cursor: pointer;
            position: relative;
            transition: .3s;
            min-height: 260px;
        }

        .module-card:hover {
            transform: translateY(-10px);
        }

        .icon {
            width: 62px;
            height: 62px;
            background: #fee2e2;
            color: #dc2626;
            border-radius: 16px;

            display:flex;
            justify-content:center;
            align-items:center;
            font-size:30px;

            margin-bottom:22px;
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

        .step {
            background: rgba(255,255,255,.08);
            padding: 18px;
            border-radius: 14px;
            margin-bottom: 14px;
        }

    </style>

</head>

<body>

<div class="hero">

    <div class="navbar">

        <div class="logo">
            Ticket<span>Desk</span>
        </div>

        <div class="menu">
            <a href="/">Dashboard</a>
            <a href="/klien">Klien</a>
            <a href="/agen">Agen</a>
            <a href="/tiket">Tiket</a>
            <a href="/kategori-masalah">Kategori</a>
            <a href="#">Solusi</a>
        </div>

    </div>

    <div class="hero-content">

        <div class="badge">
            🎫 Aplikasi Ticketing Helpdesk
        </div>

        <h1>
            Kelola Laporan Masalah Lebih Cepat dan Terorganisir
        </h1>

        <p>
            Sistem TicketDesk membantu klien membuat tiket,
            agen menangani laporan,
            serta memantau status masalah sampai mendapatkan solusi terbaik.
        </p>

        <br>

        <a href="#modul" class="btn">
            Lihat Semua Modul
        </a>

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
        <h2>Modul Ticketing Helpdesk</h2>
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

            <a href="#">
                Buka Modul →
            </a>

        </div>

        <div class="module-card"
             onclick="window.location.href='/agen'">

            <div class="icon">🧑‍💻</div>

            <small>PKG-05-2</small>

            <h3>Modul Agen</h3>

            <p>
                Mengelola data agen helpdesk
                dan penanganan tiket.
            </p>

            <a href="/agen">
                Buka Modul →
            </a>

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

            <a href="/tiket">
                Buka Modul →
            </a>

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

            <a href="#">
                Buka Modul →
            </a>

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

</body>
</html>