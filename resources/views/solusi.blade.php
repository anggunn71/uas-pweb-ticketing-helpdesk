<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modul Solusi Helpdesk</title>

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
    min-height:90px;
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
            🛠️ Modul Solusi Helpdesk
        </div>

        <h1>
            Kelola Data Solusi Ticket Helpdesk Secara Efisien
        </h1>

        <p>
            Sistem TicketDesk membantu mengelola solusi ticket,
            mencatat penyelesaian masalah, dan mendukung proses
            helpdesk agar lebih cepat serta terorganisir.
        </p>

    </div>

</div>

<div class="container">

    <div class="form-title">

        <h2 id="judulForm">
            Tambah Solusi Baru
        </h2>

    </div>

    <form id="formSolusi">

        <div class="form-grid">

            <div>
                <label>ID Ticket</label>

                <input type="number"
                       id="ticket_id"
                       placeholder="Contoh: 1"
                       required>
            </div>

            <div>
                <label>Status Solusi</label>

                <input type="text"
                       id="status_solusi"
                       placeholder="Contoh: Selesai"
                       required>
            </div>

        </div>

        <div class="form-row">

            <div style="grid-column:1/3;">

                <label>Isi Solusi</label>

                <textarea id="solusi"
                          placeholder="Masukkan solusi ticket..."
                          required></textarea>

            </div>

        </div>

        <button class="btn btn-primary"
                type="submit"
                id="btnSimpan">
            💾 Simpan Solusi
        </button>

        <button class="btn btn-cancel"
                type="button"
                id="btnBatal"
                style="display:none;">
            Batal Edit
        </button>

    </form>

    <div class="table-box">

        <h2>Daftar Solusi</h2>

        <table>

            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Ticket</th>
                    <th>Solusi</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody id="dataSolusi">

                <tr>
                    <td colspan="5">
                        Belum ada data solusi.
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

    $('#formSolusi')[0].reset();

    editId = null;

    $('#btnSimpan').html('💾 Simpan Solusi');

    $('#judulForm').text('Tambah Solusi Baru');

    $('#btnBatal').hide();
}

function loadData(){

    $.get('/api/solusi', function(response){

        let isi = '';

        if(!response.data || response.data.length === 0){

            isi = `
            <tr>
                <td colspan="5">
                    Belum ada data solusi.
                </td>
            </tr>`;

        }else{

            response.data.forEach(function(item,index){

                isi += `
                <tr>

                    <td>${index + 1}</td>
                    <td>${item.ticket_id}</td>
                    <td>${item.solusi}</td>
                    <td>${item.status_solusi}</td>

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

        $('#dataSolusi').html(isi);

    });

}

$('#formSolusi').submit(function(e){

    e.preventDefault();

    let dataSolusi = {

        ticket_id: $('#ticket_id').val(),
        solusi: $('#solusi').val(),
        status_solusi: $('#status_solusi').val()
    };

    if(editId === null){

        $.ajax({

            url:'/api/solusi',
            type:'POST',
            data:dataSolusi,

            success:function(){

                tampilNotif('Data solusi berhasil ditambahkan');

                bersihkanForm();

                loadData();
            }
        });

    }else{

        $.ajax({

            url:'/api/solusi/' + editId,
            type:'PUT',
            data:dataSolusi,

            success:function(){

                tampilNotif('Data solusi berhasil diperbarui');

                bersihkanForm();

                loadData();
            }
        });

    }

});

$(document).on('click','.tombol-edit',function(){

    let id = $(this).data('id');

    $.get('/api/solusi/' + id, function(response){

        let item = response.data ? response.data : response;

        editId = item.id;

        $('#ticket_id').val(item.ticket_id);
        $('#solusi').val(item.solusi);
        $('#status_solusi').val(item.status_solusi);

        $('#btnSimpan').html('Update Solusi');

        $('#judulForm').text('Edit Data Solusi');

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

        url:'/api/solusi/' + id,
        type:'DELETE',

        success:function(){

            tampilNotif('Data solusi berhasil dihapus');

            loadData();
        }
    });

});

</script>

</body>
</html>