<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPendaftaranSiswa extends Model
{
    use HasFactory;

    protected $table = 'data_pendaftaran_siswa';

    protected $guarded = [];

    protected $casts = [];
}