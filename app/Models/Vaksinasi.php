<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaksinasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'id_tempat',
        'tanggal_swab',
        'stok',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
    ];
}
