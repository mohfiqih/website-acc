<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvinsiModel extends Model
{
    use HasFactory;

    protected $table = 'reg_regencies';
    protected $fillable = [
        'id',
        'name',
    ];

    public $timestamps = true;
}
