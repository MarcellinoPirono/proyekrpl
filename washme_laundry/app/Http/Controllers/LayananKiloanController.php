<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\LayananKiloan;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\DB;

class LayananKiloanController extends Controller
{
    public function index()
    {
        return view('layanankiloan.tambah', [
            'title' => 'Layanan Kiloan',
            'active' => 'layanankiloan'
        ]);
    }

    public function store(Request $request)
    {

        // $validatedData = $request->validate([
        //     'layanan1' => 'required|max:255',
        //     'gambar' => 'image|file|mimes:jpeg,jpg,png,gif',
        //     'waktu1' => 'required|max:255',
        //     'keterangan1' => 'required|max:255',
        //     'express1' => 'required|max:255',
        //     'normal1' => 'required|max:255'

        // ]);

        $requestData = $request->all();
        $fileName = time() . $request->file('gambar')->getClientOriginalName();
        $path = $request->file('gambar')->storeAs('images', $fileName, 'public');
        $requestData["gambar"] = '/storage/' . $path;
        LayananKiloan::create($requestData);

        // $file_name = $request->image->getClientOriginalName();
        // $image = $request->image->storeAs('post-images', $file_name);

        // if (LayananKiloan::hasfile('gambar')) {
        //     $request->file('gambar')->move(public_path('img/products/'), $request->file('image')->getClientOriginalName());

        //     $product->image = 'img/products/' . $request->file('gambar')->getClientOriginalName();
        // }

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $path = 'storage/images/' . $filename;
        //     LayananKiloan::make($image->getRealPath())->resize(300, 300)->save($path);
        //     $request->replace(['image' => $path]);
        // }

        // $request->merge(['gambar' => $path]);

        // if ($request->file('image')) {
        //     $ValidatedData['gambar'] = $request->file('image')->store('post-images');
        // }

        // if ($request->hasfile('gambar')) {
        //     $request->file('gambar')->move('gambar/', $request->file('gambar')->getClientOriginalName());
        //     $validatedData->gambar = $request->file('gambar')->getClientOriginalName();
        //     $validatedData->save();
        // }

        // LayananKiloan::create($validatedData);
        $request->session()->flash('success', 'Registrasi Berhasil!');

        return redirect('/layanan');
    }
}
