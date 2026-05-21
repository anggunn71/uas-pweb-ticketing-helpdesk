<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Modul Tiket Helpdesk</title>

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f7fb;
            color: #1f2937;
        }

        .hero {
            background: linear-gradient(135deg, #0f172a 0%, #3b223f 45%, #b91c1c 100%);
            color: white;
            padding-bottom: 55px;
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

        .logo span { color: #ff4757; }

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

        .menu a:hover { color: #ff4757; }

        .hero-content {
            padding: 55px 90px 20px;
            max-width: 850px;
        }

        .hero-badge {
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

        .container {
            margin: -35px 90px 60px;
            background: white;
            border-radius: 18px;
            padding: 28px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }

        .alert {
            background: #dcfce7;
            color: #166534;
            padding: 13px 16px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .close-alert {
            border: none;
            background: transparent;
            color: #166534;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
        }

        .form-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .form-title h2 {
            margin: 0;
            font-size: 28px;
            font-weight: 900;
            color: #111827;
        }

        .badge {
            background: #fee2e2;
            color: #dc2626;
            padding: 12px 24px;
            border-radius: 40px;
            font-weight: 900;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1.7fr;
            gap: 16px 20px;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-top: 16px;
        }

        label {
            font-weight: 800;
            margin-bottom: 8px;
            display: block;
        }

        input, textarea, select {
            width: 100%;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 13px;
            font-size: 15px;
            outline: none;
            background: white;
        }

        textarea {
            min-height: 80px;
            resize: vertical;
        }

        input:focus, textarea:focus, select:focus {
            border-color: #ef233c;
            box-shadow: 0 0 0 4px rgba(239, 35, 60, 0.12);
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
        }

        .btn-primary {
            background: #dc2626;
            color: white;
            margin-top: 14px;
        }

        .btn-primary:hover { background: #b91c1c; }

        .btn-edit {
            background: #f59e0b;
            color: white;
        }

        .btn-delete {
            background: #dc2626;
            color: white;
        }

        .btn-close {
            background: #e5e7eb;
            color: #111827;
        }

        .table-box { margin-top: 28px; }

        .table-box h2 {
            font-size: 28px;
            margin-bottom: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 10px;
        }

        th {
            background: #dc2626;
            color: white;
            padding: 13px;
            text-align: left;
        }

        td {
            padding: 13px;
            border-bottom: 1px solid #e5e7eb;
            vertical-align: top;
        }

        tr:hover { background: #fff1f2; }

        .status {
            background: #fee2e2;
            color: #dc2626;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 13px;
        }

        .action-row {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 99;
            inset: 0;
            background: rgba(17, 24, 39, 0.65);
            padding: 40px;
            overflow: auto;
        }

        .modal-content {
            background: white;
            max-width: 850px;
            margin: auto;
            border-radius: 18px;
            padding: 30px;
            box-shadow: 0 20px 45px rgba(0,0,0,0.25);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
        }

        .notif-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(17, 24, 39, 0.55);
            z-index: 99999;
            justify-content: center;
            align-items: center;
        }

        .notif-box {
            background: white;
            width: 390px;
            text-align: center;
            padding: 32px;
            border-radius: 26px;
            box-shadow: 0 25px 60px rgba(0,0,0,0.25);
        }

        .notif-icon {
            width: 72px;
            height: 72px;
            background: #fee2e2;
            color: #dc2626;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 34px;
        }

        .notif-actions {
            display: flex;
            justify-content: center;
            gap: 12px;
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
            <a href="/agen">Agen</a>
            <a href="/tiket">Tiket</a>
            <a href="/kategori-masalah">Kategori</a>
            <a href="#">Solusi</a>
        </div>
    </div>

    <div class="hero-content">
        <div class="hero-badge">🎫 Modul Tiket Helpdesk</div>
        <h1>Kelola Tiket Helpdesk Lebih Cepat dan Terorganisir</h1>
        <p>
            Sistem TicketDesk membantu mencatat laporan masalah, menentukan prioritas,
            mengelompokkan kategori, dan memantau status tiket sampai selesai.
        </p>
    </div>
</div>

<div class="container">

    @if(session('success'))
        <div class="alert" id="notif">
            <span>{{ session('success') }}</span>
            <button onclick="hapusNotif()" class="close-alert">×</button>
        </div>
    @endif

    <div class="form-title">
        <h2>Tambah Tiket Baru</h2>
        <div class="badge">CRUD Modul Tiket</div>
    </div>

    <form action="/tiket" method="POST">
        @csrf

        <div class="form-grid">
            <div>
                <label>Judul Tiket</label>
                <input type="text" name="judul" placeholder="Contoh: Printer tidak bisa mencetak" required>
            </div>

            <div>
                <label>Deskripsi Masalah</label>
                <textarea name="deskripsi" placeholder="Tuliskan detail masalah yang terjadi..." required></textarea>
            </div>
        </div>

        <div class="form-row">
            <div>
                <label>Kategori</label>
                <select name="kategori" required>
                    <option value="Hardware">Hardware</option>
                    <option value="Software">Software</option>
                    <option value="Jaringan">Jaringan</option>
                    <option value="Akun">Akun</option>
                </select>
            </div>

            <div>
                <label>Prioritas</label>
                <select name="prioritas" required>
                    <option value="Rendah">Rendah</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Tinggi">Tinggi</option>
                </select>
            </div>

            <div>
                <label>Status</label>
                <select name="status" required>
                    <option value="Open">Open</option>
                    <option value="Diproses">Diproses</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">💾 Simpan Tiket</button>
    </form>

    <div class="table-box">
        <h2>Daftar Tiket</h2>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Kategori</th>
                    <th>Prioritas</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($tikets as $index => $tiket)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $tiket->judul }}</td>
                        <td>{{ $tiket->deskripsi }}</td>
                        <td>{{ $tiket->kategori }}</td>
                        <td>{{ $tiket->prioritas }}</td>
                        <td><span class="status">{{ $tiket->status }}</span></td>
                        <td>
                            <div class="action-row">
                                <button class="btn btn-edit" onclick="openModal('modalEdit{{ $tiket->id }}')">Edit</button>

                                <form action="/tiket/{{ $tiket->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-delete" onclick="showDeleteModal(this)">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    <div class="modal" id="modalEdit{{ $tiket->id }}">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Edit Tiket</h2>
                                <button type="button" class="btn btn-close" onclick="closeModal('modalEdit{{ $tiket->id }}')">Tutup</button>
                            </div>

                            <form action="/tiket/{{ $tiket->id }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-grid">
                                    <div>
                                        <label>Judul Tiket</label>
                                        <input type="text" name="judul" value="{{ $tiket->judul }}" required>
                                    </div>

                                    <div>
                                        <label>Deskripsi Masalah</label>
                                        <textarea name="deskripsi" required>{{ $tiket->deskripsi }}</textarea>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div>
                                        <label>Kategori</label>
                                        <select name="kategori" required>
                                            <option value="Hardware" {{ $tiket->kategori == 'Hardware' ? 'selected' : '' }}>Hardware</option>
                                            <option value="Software" {{ $tiket->kategori == 'Software' ? 'selected' : '' }}>Software</option>
                                            <option value="Jaringan" {{ $tiket->kategori == 'Jaringan' ? 'selected' : '' }}>Jaringan</option>
                                            <option value="Akun" {{ $tiket->kategori == 'Akun' ? 'selected' : '' }}>Akun</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label>Prioritas</label>
                                        <select name="prioritas" required>
                                            <option value="Rendah" {{ $tiket->prioritas == 'Rendah' ? 'selected' : '' }}>Rendah</option>
                                            <option value="Sedang" {{ $tiket->prioritas == 'Sedang' ? 'selected' : '' }}>Sedang</option>
                                            <option value="Tinggi" {{ $tiket->prioritas == 'Tinggi' ? 'selected' : '' }}>Tinggi</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label>Status</label>
                                        <select name="status" required>
                                            <option value="Open" {{ $tiket->status == 'Open' ? 'selected' : '' }}>Open</option>
                                            <option value="Diproses" {{ $tiket->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                                            <option value="Selesai" {{ $tiket->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                        </select>
                                    </div>
                                </div>

                                <button class="btn btn-primary" type="submit">Update Tiket</button>
                            </form>
                        </div>
                    </div>
                @empty
                    <tr>
                        <td colspan="7">Belum ada data tiket.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<div id="deleteModal" class="notif-overlay">
    <div class="notif-box">
        <div class="notif-icon">🗑️</div>
        <h3>Hapus Tiket?</h3>
        <p>Data tiket yang sudah dihapus tidak bisa dikembalikan.</p>
        <div class="notif-actions">
            <button type="button" onclick="closeDeleteModal()" class="btn btn-close">Batal</button>
            <button type="button" onclick="submitDelete()" class="btn btn-delete">Ya, Hapus</button>
        </div>
    </div>
</div>

<script>
    let deleteForm = null;

    function openModal(id) {
        document.getElementById(id).style.display = 'block';
    }

    function closeModal(id) {
        document.getElementById(id).style.display = 'none';
    }

    function showDeleteModal(button) {
        deleteForm = button.closest('form');
        document.getElementById('deleteModal').style.display = 'flex';
    }

    function closeDeleteModal() {
        document.getElementById('deleteModal').style.display = 'none';
        deleteForm = null;
    }

    function submitDelete() {
        if (deleteForm) {
            deleteForm.submit();
        }
    }

    function hapusNotif() {
        let notif = document.getElementById('notif');
        if (notif) notif.style.display = 'none';
    }

    setTimeout(function() {
        let notif = document.getElementById('notif');
        if (notif) notif.style.display = 'none';
    }, 3000);
</script>

</body>
</html>