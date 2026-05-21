<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Modul Agen Helpdesk</title>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<style>
*{box-sizing:border-box}
body{margin:0;font-family:'Segoe UI',Arial,sans-serif;background:#f4f7fb;color:#1f2937}
.hero{background:linear-gradient(135deg,#0f172a 0%,#3b223f 45%,#b91c1c 100%);color:white;padding-bottom:55px}
.navbar{height:82px;display:flex;align-items:center;padding:0 90px;position:relative;z-index:10}
.logo{font-size:30px;font-weight:900;color:white}
.logo span{color:#ff4757}
.menu{margin-left:70px;display:flex;gap:34px}
.menu a{color:white;text-decoration:none;font-weight:800;font-size:17px;position:relative;z-index:20}
.menu a:hover{color:#ff4757}
.hero-content{padding:55px 90px 20px;max-width:850px}
.hero-badge{display:inline-block;background:rgba(255,255,255,.16);padding:11px 22px;border-radius:30px;margin-bottom:24px;font-weight:800}
.hero-content h1{font-size:44px;margin:0 0 18px;font-weight:900}
.hero-content p{font-size:18px;line-height:1.7;color:#f3f4f6}
.container{margin:-35px 90px 60px;background:white;border-radius:18px;padding:28px;box-shadow:0 15px 35px rgba(0,0,0,.12);position:relative;z-index:5}
.form-title{display:flex;justify-content:space-between;align-items:center;margin-bottom:22px}
.form-title h2{margin:0;font-size:28px;font-weight:900;color:#111827}
.badge{background:#fee2e2;color:#dc2626;padding:12px 24px;border-radius:40px;font-weight:900}
.form-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:16px 20px}
.form-row{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:16px}
label{font-weight:800;margin-bottom:8px;display:block}
input,select{width:100%;border:1px solid #d1d5db;border-radius:8px;padding:13px;font-size:15px}
.btn{border:none;border-radius:7px;padding:10px 16px;font-size:14px;font-weight:800;cursor:pointer}
.btn-primary{background:#dc2626;color:white;margin-top:14px}
.btn-edit{background:#f59e0b;color:white}
.btn-delete{background:#dc2626;color:white}
.btn-cancel{background:#6b7280;color:white;margin-top:14px;margin-left:8px}
.notif{position:fixed;top:50%;left:50%;transform:translate(-50%,-50%);padding:18px 35px;border-radius:14px;background:#16a34a;color:white;font-weight:900;box-shadow:0 12px 35px rgba(0,0,0,.25);display:none;z-index:9999}
.table-box{margin-top:28px}
table{width:100%;border-collapse:collapse;border-radius:10px;overflow:hidden}
th{background:#dc2626;color:white;padding:13px;text-align:left}
td{padding:13px;border-bottom:1px solid #e5e7eb}
.status{background:#fee2e2;color:#dc2626;padding:6px 12px;border-radius:20px;font-weight:bold;font-size:13px}
.action-row{display:flex;gap:8px}
</style>
</head>

<body>

<div id="notif" class="notif"></div>

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
        <div class="hero-badge">🧑‍💻 PKG-05-2 Modul Agen</div>
        <h1>Kelola Data Agen Helpdesk</h1>
        <p>Modul Agen digunakan untuk mengelola data petugas yang menangani, memproses, dan menyelesaikan tiket laporan dari klien.</p>
    </div>
</div>

<div class="container">

    <div class="form-title">
        <h2 id="judulForm">Tambah Agen Baru</h2>
        <div class="badge">CRUD Modul Agen</div>
    </div>

    <form id="formAgen">
        <div class="form-grid">
            <div>
                <label>Nama Agen</label>
                <input type="text" id="nama_agen" placeholder="Contoh: Dwi Riska" required>
            </div>

            <div>
                <label>Email Agen</label>
                <input type="email" id="email" placeholder="Contoh: agen@email.com" required>
            </div>
        </div>

        <div class="form-row">
            <div>
                <label>Divisi</label>
                <select id="divisi" required>
                    <option value="Teknis">Teknis</option>
                    <option value="Customer Service">Customer Service</option>
                    <option value="Jaringan">Jaringan</option>
                    <option value="Sistem">Sistem</option>
                </select>
            </div>

            <div>
                <label>Status Agen</label>
                <select id="status" required>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
            </div>

            <div>
                <label>No HP</label>
                <input type="text" id="no_hp" placeholder="Contoh: 08123456789" required>
            </div>
        </div>

        <button class="btn btn-primary" type="submit" id="btnSimpan">Simpan Agen</button>
        <button class="btn btn-cancel" type="button" id="btnBatal" style="display:none;">Batal Edit</button>
    </form>

    <div class="table-box">
        <h2>Daftar Agen</h2>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Agen</th>
                    <th>Email</th>
                    <th>Divisi</th>
                    <th>Status</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody id="dataAgen">
                <tr>
                    <td colspan="7">Belum ada data agen.</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

<script>
let editId = null;

loadData();

function tampilNotif(pesan){
    $('#notif').text(pesan).fadeIn();

    setTimeout(function(){
        $('#notif').fadeOut();
    },1800);
}

function bersihkanForm(){
    $('#formAgen')[0].reset();
    editId = null;
    $('#btnSimpan').text('Simpan Agen');
    $('#judulForm').text('Tambah Agen Baru');
    $('#btnBatal').hide();
}

function loadData(){
    $.get('/api/agen', function(response){
        let isi = '';

        if(!response.data || response.data.length === 0){
            isi = `<tr><td colspan="7">Belum ada data agen.</td></tr>`;
        }else{
            response.data.forEach(function(item,index){
                isi += `
                <tr>
                    <td>${index + 1}</td>
                    <td>${item.nama_agen}</td>
                    <td>${item.email}</td>
                    <td>${item.divisi}</td>
                    <td><span class="status">${item.status}</span></td>
                    <td>${item.no_hp}</td>
                    <td>
                        <div class="action-row">
                            <button type="button" class="btn btn-edit tombol-edit" data-id="${item.id}">Edit</button>
                            <button type="button" class="btn btn-delete tombol-hapus" data-id="${item.id}">Hapus</button>
                        </div>
                    </td>
                </tr>`;
            });
        }

        $('#dataAgen').html(isi);
    });
}

$(document).on('click','.tombol-edit',function(){
    let id = $(this).data('id');

    $.get('/api/agen/' + id, function(response){
        let item = response.data ? response.data : response;

        editId = item.id;

        $('#nama_agen').val(item.nama_agen);
        $('#email').val(item.email);
        $('#no_hp').val(item.no_hp);
        $('#divisi').val(item.divisi);
        $('#status').val(item.status);

        $('#btnSimpan').text('Update Agen');
        $('#judulForm').text('Edit Data Agen');
        $('#btnBatal').show();

        tampilNotif('Data siap diedit');

        $('html, body').animate({
            scrollTop: $('#formAgen').offset().top - 120
        },500);
    });
});

$('#btnBatal').click(function(){
    bersihkanForm();
    tampilNotif('Edit dibatalkan');
});

$('#formAgen').submit(function(e){
    e.preventDefault();

    let dataAgen = {
        nama_agen: $('#nama_agen').val(),
        email: $('#email').val(),
        no_hp: $('#no_hp').val(),
        divisi: $('#divisi').val(),
        status: $('#status').val()
    };

    if(editId === null){
        $.ajax({
            url:'/api/agen',
            type:'POST',
            data:dataAgen,
            success:function(){
                tampilNotif('Data agen berhasil ditambahkan');
                bersihkanForm();
                loadData();
            }
        });
    }else{
        $.ajax({
            url:'/api/agen/' + editId,
            type:'PUT',
            data:dataAgen,
            success:function(){
                tampilNotif('Data agen berhasil diperbarui');
                bersihkanForm();
                loadData();
            }
        });
    }
});

$(document).on('click','.tombol-hapus',function(){
    let id = $(this).data('id');

    $.ajax({
        url:'/api/agen/' + id,
        type:'DELETE',
        success:function(){
            tampilNotif('Data agen berhasil dihapus');
            loadData();
        }
    });
});
</script>

</body>
</html>