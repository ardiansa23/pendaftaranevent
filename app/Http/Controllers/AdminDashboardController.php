<?php

namespace App\Http\Controllers;

use App\Models\peserta;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $pesertas= peserta::all();

        return view('admin.peserta', compact('pesertas'));
    }
    public function show($id)
    {
        $pesertas = Peserta::findOrFail($id); // Mengambil peserta berdasarkan ID
        return view('admin.detail_peserta', compact('pesertas'));
    }
}
