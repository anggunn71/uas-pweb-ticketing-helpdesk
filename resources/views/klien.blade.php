<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Modul Klien Helpdesk</title>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<style>

*{
    box-sizing:border-box;
}

body{
    margin:0;
    font-family:'Segoe UI', Arial, sans-serif;
    background:#f4f7fb;
    color:#1f2937;
}

.hero{
    background:linear-gradient(135deg,#0f172a 0%, #3b223f 45%, #b91c1c 100%);
    color:white;
    padding-bottom:55px;
}

.navbar{
    height:82px;
    display:flex;
    align-items:center;
    padding:0 90px;
}

.logo{
    font-size:30px;
    font-weight:900;
    color:white;
    white-space:nowrap;
    letter-spacing:1px;
}

.logo span{
    color:#ff4757;
}

.menu{
    margin-left:70px;
    display:flex;
    gap:34px;
    align-items:center;
}

.menu a{
    color:white;
    text-decoration:none;
    font-weight:800;
    font-size:17px;
}

.menu a:hover{
    color:#ff4757;
}

.hero-content{
    padding:55px 90px 20px;
    max-width:850px;
}

.hero-badge{
    display:inline-block;
    background:rgba(255,255,255,0.16);
    padding:11px 22px;
    border-radius:30px;
    margin-bottom:24px;
    font-weight:800;
}

.hero-content h1{
    font-size:44px;
    line-height:1.18;
    margin:0 0 18px;
    font-weight:900;
}

.hero-content p{
    font-size:18px;
    line-height:1.7;
    color:#f3f4f6;
    max-width:780px;
}

.container{
    margin:-35px 90px 60px;
    background:white;
    border-radius:18px;
    padding:28px;
    box-shadow:0 15px 35px rgba(0,0,0,0.12);
}

.form-title{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

.form-title h2{
    margin:0;
    font-size:28px;
    font-weight:900;
    color:#111827;
}

.badge{
    background:#fee2e2;
    color:#dc2626;
    padding:12px 24px;
    border-radius:40px;
    font-weight:900;
}

.form-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:16px 20px;
}

.form-row{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:16px;
    margin-top:16px;
}

label{
    font-weight:800;
    margin-bottom:8px;
    display:block;
}

input,
textarea{
    width:100%;
    border:1px solid #d1d5db;
    border-radius:8px;
    padding:13px;
    font-size:15px;
    outline:none;
    background:white;
}

textarea{
    min-height:80px;
    resize:vertical;
}

input:focus,
textarea:focus{
    border-color:#ef233c;
    box-shadow:0 0 0 4px rgba(239,35,60,0.12);
}

.btn{
    border:none;
    border-radius:7px;
    padding:10px 16px;
    font-size:14px;
    font-weight:800;
    cursor:pointer;
    text-decoration:none;
    display:inline-block;
}

.btn-primary{
    background:#dc2626;
    color:white;
    margin-top:14px;
}

.btn-primary:hover{
    background:#b91c1c;
}

.btn-edit{
    background:#f59e0b;
    color:white;
}

.btn-delete{
    background:#dc2626;
    color:white;
}

.btn-cancel{
    background:#6b7280;
    color:white;
    margin-top:14px;
    margin-left:8px;
}

.table-box{
    margin-top:28px;
}

.table-box h2{
    font-size:28px;
    margin-bottom:14px;
}

table{
    width:100%;
    border-collapse:collapse;
    overflow:hidden;
    border-radius:10px;
}

th{
    background:#dc2626;
    color:white;
    padding:13px;
    text-align:left;
}

td{
    padding:13px;
    border-bottom:1px solid #e5e7eb;
    vertical-align:top;
}

tr:hover{
    background:#fff1f2;
}

.action-row{
    display:flex;
    gap:8px;
    align-items:center;
}

.notif{
    position:fixed;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    padding:18px 35px;
    border-radius:14px;
    background:#16a34a;
    color:white;
    font-weight:900;
    box-shadow:0 12px 35px rgba(0,0,0,.25);
    display:none;
    z-index:9999;
}

</style>
</head>

<body>

<div id="notif" class="notif"></div>

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
            <a href="/solusi">Solusi</a>
        </div>

    </div>

    <div class="hero-content">

        <div class="hero-badge">
            👨‍💼 Modul Klien Helpdesk
        </div>

        <h1>
            Kelola Data Klien Helpdesk Lebih Cepat dan Terorganisir
        </h1>

        <p>
            Sistem TicketDesk membantu mengelola data pelanggan,
            mempermudah pendataan klien, dan mendukung proses
            pelayanan helpdesk agar lebih cepat dan efisien.
        </p>

    </div>

</div>

<div class="container">

    <div class="form-title">

        <h2 id="judulForm">
            Tambah Klien Baru
        </h2>

        <div class="">

        </div>

    </div>

    <form id="formKlien">

        <div class="form-grid">

            <div>
                <label>Nama Klien</label>

                <input type="text"
                       id="nama"
                       placeholder="Contoh: Elyza Silalahi"
                       required>
            </div>

            <div>
                <label>Email Klien</label>

                <input type="email"
                       id="email"
                       placeholder="Contoh: klien@gmail.com"
                       required>
            </div>

        </div>

        <div class="form-row">

            <div>
                <label>No HP</label>

                <input type="text"
                       id="telepon"
                       placeholder="Contoh: 08123456789"
                       required>
            </div>

        </div>

        <div class="form-row">

            <div style="grid-column:1/3;">
                <label>Alamat</label>

                <textarea id="alamat"
                          placeholder="Masukkan alamat klien..."></textarea>
            </div>

        </div>

        <button class="btn btn-primary"
                type="submit"
                id="btnSimpan">
            💾 Simpan Klien
        </button>

        <button class="btn btn-cancel"
                type="button"
                id="btnBatal"
                style="display:none;">
            Batal Edit
        </button>

    </form>

    <div class="table-box">

        <h2>Daftar Klien</h2>

        <table>

            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody id="dataKlien">

                <tr>
                    <td colspan="7">
                        Belum ada data klien.
                    </td>
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

    $('#formKlien')[0].reset();

    editId = null;

    $('#btnSimpan').html('💾 Simpan Klien');

    $('#judulForm').text('Tambah Klien Baru');

    $('#btnBatal').hide();
}

function loadData(){

    $.get('/api/klien', function(response){

        let isi = '';

        if(!response.data || response.data.length === 0){

            isi = `
            <tr>
                <td colspan="7">
                    Belum ada data klien.
                </td>
            </tr>`;

        }else{

            response.data.forEach(function(item,index){

                isi += `
                <tr>

                    <td>${index + 1}</td>
                    <td>${item.nama}</td>
                    <td>${item.email}</td>
                    <td>${item.telepon}</td>
                    <td>${item.alamat}</td>

                    <td>

                        <div class="action-row">

                            <button type="button"
                                    class="btn btn-edit tombol-edit"
                                    data-id="${item.id}">
                                Edit
                            </button>

                            <button type="button"
                                    class="btn btn-delete tombol-hapus"
                                    data-id="${item.id}">
                                Hapus
                            </button>

                        </div>

                    </td>

                </tr>`;
            });

        }

        $('#dataKlien').html(isi);

    });

}

$('#formKlien').submit(function(e){

    e.preventDefault();

    let dataKlien = {

        nama: $('#nama').val(),
        email: $('#email').val(),
        telepon: $('#telepon').val(),
        alamat: $('#alamat').val()
    };

    if(editId === null){

        $.ajax({

            url:'/api/klien',
            type:'POST',
            data:dataKlien,

            success:function(){

                tampilNotif('Data klien berhasil ditambahkan');

                bersihkanForm();

                loadData();
            }
        });

    }else{

        $.ajax({

            url:'/api/klien/' + editId,
            type:'PUT',
            data:dataKlien,

            success:function(){

                tampilNotif('Data klien berhasil diperbarui');

                bersihkanForm();

                loadData();
            }
        });

    }

});

$(document).on('click','.tombol-edit',function(){

    let id = $(this).data('id');

    $.get('/api/klien/' + id, function(response){

        let item = response.data ? response.data : response;

        editId = item.id;

        $('#nama').val(item.nama);
        $('#email').val(item.email);
        $('#telepon').val(item.telepon);
        $('#alamat').val(item.alamat);

        $('#btnSimpan').html('Update Klien');

        $('#judulForm').text('Edit Data Klien');

        $('#btnBatal').show();

        tampilNotif('Data siap diedit');

    });

});

$('#btnBatal').click(function(){

    bersihkanForm();

    tampilNotif('Edit dibatalkan');

});

$(document).on('click','.tombol-hapus',function(){

    let id = $(this).data('id');

    $.ajax({

        url:'/api/klien/' + id,
        type:'DELETE',

        success:function(){

            tampilNotif('Data klien berhasil dihapus');

            loadData();
        }
    });

});

</script>

</body>
</html>