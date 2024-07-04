<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_cabang';

    protected $fillable = [
        'unit',
        'Active',
        'deskripsi',
        'pic',
        'tanggal',
        'status'
    ];
}
