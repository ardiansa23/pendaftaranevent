<?php

namespace App\Models;
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Pastikan ini di-import
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable // Menggunakan Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Jika ada fungsi lain, tambahkan di sini
}

