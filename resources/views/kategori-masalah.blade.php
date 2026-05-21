<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Modul Kategori Masalah</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

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

        .form-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px;
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

        label {
            font-weight: 800;
            margin-bottom: 8px;
            display: block;
        }

        input, textarea {
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

        input:focus, textarea:focus {
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

        .btn-edit {
            background: #f59e0b;
            color: white;
        }

        .btn-delete {
            background: #dc2626;
            color: white;
        }

        .table-box { margin-top: 28px; }

        .table-box h2 {
            font-size: 28px;
            margin-bottom: 14px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius: 10px;
            overflow: hidden;
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
        }
    </style>
</head>
<body>

<div class="hero">
    <div class="navbar">
        <div class="logo">Ticket<span>Desk</span></div>

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
        <div class="hero-badge">📂 PKG-05-4 Modul Kategori Masalah</div>
        <h1>Kelola Kategori Masalah Helpdesk</h1>
        <p>
            Modul Kategori Masalah digunakan untuk mengelompokkan laporan tiket
            berdasarkan jenis masalah seperti hardware, software, jaringan, dan akun.
        </p>
    </div>
</div>

<div class="container">

    <div class="form-title">
        <h2 id="formTitle">Tambah Kategori Masalah</h2>
        <div class="badge">CRUD Modul Kategori</div>
    </div>

    <form id="formKategori">
        <input type="hidden" id="kategori_id">

        <div class="form-grid">
            <div>
                <label>Nama Kategori</label>
                <input type="text" id="nama_kategori" placeholder="Contoh: Hardware" required>
            </div>

            <div>
                <label>Deskripsi Kategori</label>
                <textarea id="deskripsi" placeholder="Contoh: Masalah pada perangkat komputer, printer, atau hardware lainnya..." required></textarea>
            </div>
        </div>

        <button class="btn btn-primary" type="submit" id="btnSubmit">Simpan Kategori</button>
        <button class="btn btn-delete" type="button" id="btnBatal" style="display:none;">Batal Edit</button>
    </form>

    <div class="table-box">
        <h2>Daftar Kategori Masalah</h2>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Deskripsi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody id="tableKategori">
                <tr>
                    <td colspan="5">Memuat data...</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<script>
    const apiUrl = "http://127.0.0.1:8000/api/kategori-masalahs";

    function loadData() {
        $.ajax({
            url: apiUrl,
            type: "GET",
            success: function(response) {
                let rows = "";

                if (response.data.length === 0) {
                    rows = `
                        <tr>
                            <td colspan="5">Belum ada data kategori masalah</td>
                        </tr>
                    `;
                } else {
                    response.data.forEach(function(item, index) {
                        rows += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${item.nama_kategori}</td>
                                <td>${item.deskripsi ?? '-'}</td>
                                <td><span class="status">Aktif</span></td>
                                <td>
                                    <div class="action-row">
                                        <button class="btn btn-edit" onclick="editData(${item.id}, '${item.nama_kategori}', '${item.deskripsi ?? ''}')">Edit</button>
                                        <button class="btn btn-delete" onclick="hapusData(${item.id})">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                        `;
                    });
                }

                $("#tableKategori").html(rows);
            },
            error: function() {
                alert("Gagal mengambil data kategori masalah.");
            }
        });
    }

    loadData();

    $("#formKategori").submit(function(e) {
        e.preventDefault();

        let id = $("#kategori_id").val();
        let method = id ? "PUT" : "POST";
        let url = id ? apiUrl + "/" + id : apiUrl;

        $.ajax({
            url: url,
            type: method,
            data: {
                nama_kategori: $("#nama_kategori").val(),
                deskripsi: $("#deskripsi").val()
            },
            success: function(response) {
                alert(response.message);
                resetForm();
                loadData();
            },
            error: function() {
                alert("Data gagal disimpan. Periksa kembali input kategori.");
            }
        });
    });

    function editData(id, nama, deskripsi) {
        $("#kategori_id").val(id);
        $("#nama_kategori").val(nama);
        $("#deskripsi").val(deskripsi);

        $("#formTitle").text("Edit Kategori Masalah");
        $("#btnSubmit").text("Update Kategori");
        $("#btnBatal").show();

        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    }

    $("#btnBatal").click(function() {
        resetForm();
    });

    function resetForm() {
        $("#kategori_id").val("");
        $("#formKategori")[0].reset();

        $("#formTitle").text("Tambah Kategori Masalah");
        $("#btnSubmit").text("Simpan Kategori");
        $("#btnBatal").hide();
    }

    function hapusData(id) {
        if (confirm("Yakin ingin menghapus kategori ini?")) {
            $.ajax({
                url: apiUrl + "/" + id,
                type: "DELETE",
                success: function(response) {
                    alert(response.message);
                    loadData();
                },
                error: function() {
                    alert("Data gagal dihapus.");
                }
            });
        }
    }
</script>

</body>
</html>