<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\category;
// use DB;
use App\Models\User;
use Illuminate\Http\Request;

class DataKasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('data_kasir', [
            "title" => "Data Kasir",
            'users' => Users::where('is_admin', '0')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('data_kasir', [
        //     'categories'
        // ]);
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
     * @param  \App\Models\Users  $Users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $Users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Users  $Users
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $Users = DB::table('users')->get();
        Users::find($id);
        $id->put();

        return redirect('data_kasir')->with('success', 'Username berhasil diubah!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Users  $Users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $Users)
    {
        $rules = [
            'nama' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'password' => 'required|min:5|max:255',
            'gender' => 'required|max:255',
            'handphone' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'alamat' => 'required|max:255'

        ];

        if ($request->username != $Users->username) {
            $rules['username'] = ['required', 'min:3', 'max:255', 'unique:users'];
        }

        if ($request->email != $Users->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }

        $validatedData = $request->validate($rules);

        // auth()->user()->update(['password' => Hash::make($request->password)]);

        return back()->with('message', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Users  $Users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // User::destroy($users->id);
        $Users = Users::find($id);
        $Users->delete();

        return redirect('data_kasir')->with('success', 'Username berhasil dihapus!');
    }
}
