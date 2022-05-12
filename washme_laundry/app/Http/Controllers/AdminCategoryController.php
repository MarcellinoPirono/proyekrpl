<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->guest()) {
            abort(403);
        }

        if(auth()->user()->username !== 'rajab25'){
            return view('pesanan', [
                "title" => "Pesanan"
            ]);
            // Route::get('/riwayat_transaksi', function () {
                // return view('riwayat_transaksi', [
                //     "title" => "Riwayat Transaksi"
                // ]); 
            // });
            // Route::get('/input_pengeluaran', function() {
            //     return view('input_pengeluaran', [
            //         "title" => "Input Pengeluaran"
            //     ]);
            // })->middleware('auth');
            // Route::get('/pengaturan', function() {
            //     return view('pengaturan', [
            //         "title" => "Pengaturan"
            //     ]);
            // })->middleware('auth');
        }

        return view('dashboard', [
            "title" => "Dashboard"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
}
