<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peserta extends Model
{
    protected $table = 'peserta';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'jabatan',
        'afiliasi',
        'afiliasi_lain',
        'pengalaman',
        'pengalaman_lain',
        'tujuanwo',
    ];
    use HasFactory;
}
