<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LayananSatuanController extends Controller
{
    public function index()
    {
        return view('layanansatuan.tambah1', [
            'title' => 'Layanan Satuan',
            'active' => 'layanansatuan'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'layanan' => 'required|max:255',
            // 'gambar' => 'required',
            'estimasi' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'express' => 'required|max:255',
            'normal' => 'required|email:dns|unique:users',
            'alamat' => 'required|max:255'

        ]);

        User::create($validatedData);
        $request->session()->flash('success', 'Registrasi Berhasil!');

        return redirect('/layanan');
    }
}
