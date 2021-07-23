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
        'alamat',
        'tanggal_lahir',
        'nama',
        'email',
        'no_telp',
        'foto_ktp',
        'link',
    ];
}
