<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Modul Tiket Helpdesk</title>

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

        .navbar {
            height: 85px;
            background: #111827;
            display: flex;
            align-items: center;
            padding: 0 90px;
            color: white;
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

        .hero {
            background: linear-gradient(135deg, #111827, #dc2626);
            color: white;
            padding: 55px 90px 90px;
        }

        .hero h1 {
            font-size: 42px;
            margin: 0 0 12px;
        }

        .hero p {
            font-size: 18px;
            color: #f3f4f6;
        }

        .container {
            margin: -55px 90px 60px;
            background: white;
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }

        .alert {
            background: #dcfce7;
            color: #166534;
            padding: 14px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-weight: bold;
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
            background: #fee2e2;
            color: #dc2626;
            padding: 10px 16px;
            border-radius: 30px;
            font-weight: bold;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px;
        }

        .form-group.full {
            grid-column: span 2;
        }

        label {
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
        }

        input, textarea, select {
            width: 100%;
            border: 1px solid #d1d5db;
            border-radius: 12px;
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
            border-color: #dc2626;
            box-shadow: 0 0 0 4px rgba(220, 38, 38, 0.12);
        }

        .btn {
            border: none;
            border-radius: 10px;
            padding: 11px 17px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: #ef233c;
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

        .table-box {
            margin-top: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 14px;
        }

        th {
            background: #111827;
            color: white;
            padding: 14px;
            text-align: left;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #e5e7eb;
            vertical-align: top;
        }

        tr:hover {
            background: #f9fafb;
        }

        .status {
            background: #fee2e2;
            color: #dc2626;
            padding: 6px 10px;
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
            border-radius: 20px;
            padding: 35px;
            box-shadow: 0 20px 45px rgba(0,0,0,0.25);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .modal-header h2 {
            margin: 0;
        }

        .action-row {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        @media (max-width: 900px) {
            .navbar, .hero {
                padding-left: 30px;
                padding-right: 30px;
            }

            .container {
                margin-left: 30px;
                margin-right: 30px;
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
    <div class="logo">Ticket<span>Desk</span></div>

    <div class="menu">
        <a href="/">Dashboard</a>
        <a href="/tiket">Tiket</a>
        <a href="#">Kategori</a>
        <a href="#">Status</a>
    </div>
</div>

<div class="hero">
    <h1>Modul Tiket Helpdesk</h1>
    <p>Kelola laporan masalah, prioritas, kategori, dan status tiket dalam satu halaman.</p>
</div>

<div class="container">

    @if(session('success'))
        <div class="alert">{{ session('success') }}</div>
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
        <div class="badge">CRUD Modul Tiket</div>
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
                                    <button class="btn btn-delete" onclick="return confirm('Yakin ingin hapus tiket ini?')">
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
                                <button class="btn btn-close" onclick="closeModal('modalEdit{{ $tiket->id }}')">
                                    Tutup
                                </button>
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

<script>
    function openModal(id) {
        document.getElementById(id).style.display = 'block';
    }

    function closeModal(id) {
        document.getElementById(id).style.display = 'none';
    }

    window.onclick = function(event) {
        let modals = document.querySelectorAll('.modal');

        modals.forEach(function(modal) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    }
</script>

</body>
</html>