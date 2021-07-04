<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarVaksinasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_vaksinasi',
        'nik',
        'nama',
        'email',
        'no_telp',
        'foto_ktp',
    ];
}
