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
    public function destroy($id)
{
    $pesertas = Peserta::findOrFail($id); // Mencari peserta berdasarkan ID
    $pesertas->delete(); // Menghapus peserta

    return redirect()->route('admin.peserta')->with('success', 'Peserta berhasil dihapus.'); // Redirect dengan pesan sukses
}

}
