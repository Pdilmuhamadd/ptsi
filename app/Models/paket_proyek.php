<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paket_proyek extends Model
{
    use HasFactory;

    protected $table = 'paket_proyeks'; // Tambahkan ini untuk mengatasi masalah pluralisasi tabel

    protected $primaryKey = 'id_proyek';

    protected $fillable = [
        'nama_proyek',
        'deskripsi_proyek',
        'tanggal_mulai',
        'target_selesai',
        'estimasi_biaya',
        'pic',
        'mp',
        'sumber_daya',
    ];
}
