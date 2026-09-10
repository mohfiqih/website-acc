<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPendaftaranSiswa extends Model
{
    use HasFactory;

    protected $table = 'data_pendaftaran_siswa';

    protected $guarded = [];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'tanggal_keluar_negeri' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}