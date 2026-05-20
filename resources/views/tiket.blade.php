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

        .navbar {
            height: 85px;
            background: white;
            display: flex;
            align-items: center;
            padding: 0 70px;
            box-shadow: 0 4px 18px rgba(0,0,0,0.06);
        }

        .logo {
            font-size: 32px;
            font-weight: 800;
            color: #e11d48;
            margin-right: 45px;
        }

        .menu {
            display: flex;
            gap: 30px;
        }

        .menu a {
            color: #374151;
            text-decoration: none;
            font-weight: 700;
            font-size: 17px;
        }

        .hero {
            background: linear-gradient(135deg, #e11d48, #fb7185);
            color: white;
            padding: 55px 70px 90px;
        }

        .hero h1 {
            font-size: 42px;
            margin: 0 0 12px;
        }

        .hero p {
            font-size: 18px;
            margin: 0;
        }

        .container {
            margin: -55px 70px 60px;
            background: white;
            border-radius: 22px;
            padding: 35px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }

        .alert {
            background: #dcfce7;
            color: #166534;
            padding: 14px 18px;
            border-radius: 12px;
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

        .error-box {
            background: #fee2e2;
            color: #991b1b;
            padding: 14px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .form-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .form-title h2 {
            margin: 0;
            font-size: 28px;
        }

        .badge {
            background: #ffe4e6;
            color: #dc2626;
            padding: 14px 28px;
            border-radius: 40px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .form-group.full { grid-column: span 2; }

        label {
            font-weight: 700;
            margin-bottom: 8px;
            display: block;
        }

        input, textarea, select {
            width: 100%;
            border: 1px solid #d1d5db;
            border-radius: 14px;
            padding: 15px;
            font-size: 16px;
            outline: none;
            background: white;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        input:focus, textarea:focus, select:focus {
            border-color: #e11d48;
            box-shadow: 0 0 0 4px rgba(225, 29, 72, 0.12);
        }

        .btn {
            border: none;
            border-radius: 12px;
            padding: 11px 18px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: #e11d48;
            color: white;
            margin-top: 20px;
        }

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

        .table-box { margin-top: 40px; }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 14px;
        }

        th {
            background: #e11d48;
            color: white;
            padding: 14px;
            text-align: left;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #e5e7eb;
            vertical-align: top;
        }

        tr:hover { background: #fff1f2; }

        .status {
            background: #ffe4e6;
            color: #dc2626;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 13px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 99;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(17, 24, 39, 0.65);
            padding: 40px;
            overflow: auto;
        }

        .modal-content {
            background: white;
            max-width: 850px;
            margin: auto;
            border-radius: 22px;
            padding: 35px;
            box-shadow: 0 20px 45px rgba(0,0,0,0.25);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .action-row {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .notif-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(17, 24, 39, 0.55);
            z-index: 999;
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
            animation: popUp 0.25s ease;
        }

        .notif-icon {
            width: 72px;
            height: 72px;
            background: #ffe4e6;
            color: #dc2626;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 34px;
        }

        .notif-box h3 {
            margin: 8px 0;
            font-size: 24px;
        }

        .notif-box p {
            color: #6b7280;
            margin-bottom: 24px;
            line-height: 1.5;
        }

        .notif-actions {
            display: flex;
            justify-content: center;
            gap: 12px;
        }

        @keyframes popUp {
            from {
                transform: scale(0.85);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @media (max-width: 900px) {
            .navbar, .hero {
                padding-left: 25px;
                padding-right: 25px;
            }

            .container {
                margin-left: 25px;
                margin-right: 25px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full {
                grid-column: span 1;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <div class="logo">Helpdesk</div>

    <div class="menu">
        <a href="/">Dashboard</a>
        <a href="/tiket">Tiket</a>
        <a href="#">Kategori</a>
        <a href="#">Status</a>
    </div>
</div>

<div class="hero">
    <h1>Modul Tiket Helpdesk</h1>
    <p>Kelola laporan masalah, prioritas, kategori, dan status tiket dengan tampilan yang lebih rapi.</p>
</div>

<div class="container">

    @if(session('success'))
        <div class="alert" id="notif">
            <span>{{ session('success') }}</span>
            <button onclick="hapusNotif()" class="close-alert">×</button>
        </div>
    @endif

    @if($errors->any())
        <div class="error-box">
            <b>Data belum lengkap:</b>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-title">
        <h2>Tambah Tiket Baru</h2>
        <div class="badge">Kelola Tiket Helpdesk</div>
    </div>

    <form action="/tiket" method="POST">
        @csrf

        <div class="form-grid">
            <div class="form-group full">
                <label>Judul Tiket</label>
                <input type="text" name="judul" placeholder="Contoh: Printer tidak bisa mencetak" required>
            </div>

            <div class="form-group full">
                <label>Deskripsi Masalah</label>
                <textarea name="deskripsi" placeholder="Jelaskan masalah yang terjadi" required></textarea>
            </div>

            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" required>
                    <option value="Hardware">Hardware</option>
                    <option value="Software">Software</option>
                    <option value="Jaringan">Jaringan</option>
                    <option value="Akun">Akun</option>
                </select>
            </div>

            <div class="form-group">
                <label>Prioritas</label>
                <select name="prioritas" required>
                    <option value="Rendah">Rendah</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Tinggi">Tinggi</option>
                </select>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select name="status" required>
                    <option value="Open">Open</option>
                    <option value="Diproses">Diproses</option>
                    <option value="Selesai">Selesai</option>
                </select>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Simpan Tiket</button>
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
                                <button class="btn btn-edit" onclick="openModal('modalEdit{{ $tiket->id }}')">
                                    Edit
                                </button>

                                <form action="/tiket/{{ $tiket->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-delete" onclick="showDeleteModal(this)">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    <div class="modal" id="modalEdit{{ $tiket->id }}">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2>Edit Tiket</h2>
                                <button class="btn btn-close" onclick="closeModal('modalEdit{{ $tiket->id }}')">Tutup</button>
                            </div>

                            <form action="/tiket/{{ $tiket->id }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-grid">
                                    <div class="form-group full">
                                        <label>Judul Tiket</label>
                                        <input type="text" name="judul" value="{{ $tiket->judul }}" required>
                                    </div>

                                    <div class="form-group full">
                                        <label>Deskripsi Masalah</label>
                                        <textarea name="deskripsi" required>{{ $tiket->deskripsi }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <select name="kategori" required>
                                            <option value="Hardware" {{ $tiket->kategori == 'Hardware' ? 'selected' : '' }}>Hardware</option>
                                            <option value="Software" {{ $tiket->kategori == 'Software' ? 'selected' : '' }}>Software</option>
                                            <option value="Jaringan" {{ $tiket->kategori == 'Jaringan' ? 'selected' : '' }}>Jaringan</option>
                                            <option value="Akun" {{ $tiket->kategori == 'Akun' ? 'selected' : '' }}>Akun</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Prioritas</label>
                                        <select name="prioritas" required>
                                            <option value="Rendah" {{ $tiket->prioritas == 'Rendah' ? 'selected' : '' }}>Rendah</option>
                                            <option value="Sedang" {{ $tiket->prioritas == 'Sedang' ? 'selected' : '' }}>Sedang</option>
                                            <option value="Tinggi" {{ $tiket->prioritas == 'Tinggi' ? 'selected' : '' }}>Tinggi</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
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
            <button onclick="closeDeleteModal()" class="btn btn-close">Batal</button>
            <button onclick="submitDelete()" class="btn btn-delete">Ya, Hapus</button>
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

    function hapusNotif() {
        let notif = document.getElementById('notif');
        if (notif) {
            notif.style.display = 'none';
        }
    }

    setTimeout(function() {
        let notif = document.getElementById('notif');
        if (notif) {
            notif.style.display = 'none';
        }
    }, 3000);

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

    window.onclick = function(event) {
        let modals = document.querySelectorAll('.modal');

        modals.forEach(function(modal) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });

        let deleteModal = document.getElementById('deleteModal');
        if (event.target === deleteModal) {
            closeDeleteModal();
        }
    }
</script>

</body>
</html>