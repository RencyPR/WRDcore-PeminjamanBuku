<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $table = 'datas';

    protected $fillable = [
        'KdPinjam', 'nama', 'judul', 'KdBuku', 'tglPinjam', 'tglKembali', 'status'
    ];
}
