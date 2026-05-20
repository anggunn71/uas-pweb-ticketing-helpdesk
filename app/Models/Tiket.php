<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    protected $fillable = [
        'judul',
        'deskripsi',
        'kategori',
        'prioritas',
        'status',
    ];
}