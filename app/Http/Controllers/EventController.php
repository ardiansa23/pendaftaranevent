<?php

namespace App\Http\Controllers;

use App\Models\Peserta; // Pastikan nama model sesuai dengan konvensi kapitalisasi
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function registerpeserta(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:peserta',
            'phone' => 'required|string|max:15',
            'afiliasi' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'pengalaman' => 'required|string|max:255',
            'tujuanwo' => 'required|string|max:255',
            'afiliasi_lain' => 'nullable|string|max:255',
            'pengalaman_lain' => 'nullable|string|max:255',
        ]);

        // Simpan data peserta
      $pesertas=  Peserta::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'phone' => $request->input('phone'),
        'afiliasi' => $request->input('afiliasi'),
        'afiliasi_lain' => $request->input('afiliasi_lain'),
        'jabatan' => $request->input('jabatan'),
        'pengalaman' => $request->input('pengalaman'),
        'pengalaman_lain' => $request->input('pengalaman_lain'),
        'tujuanwo' => $request->input('tujuanwo'),
        ]);

        // Simpan data peserta ke session
        session(['Peserta' => $pesertas]);

        // Redirect atau response setelah sukses
        return redirect()->back()->with('success', 'Pendaftaran berhasil!');
    }
    public function showDetail($email)
{
    // Cari peserta berdasarkan email
    $pesertas = Peserta::where('email', $email)->first();

    if (!$pesertas) {

        return redirect()->back()->with('error', 'Peserta tidak ditemukan');
    }

    // Kirim data peserta ke view
    return view('admin.detail_peserta', compact('peserta'));
}
public function pembayaran (){
// 'metode'=>
}


}
