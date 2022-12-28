<?php

namespace App\Http\Controllers;

use App\Models\makanan;
use Illuminate\Http\Request;

class Admin extends Controller
{
    function index(){
        return view('admin.home');
    }

    function data_makanan(){
        $makanans = makanan::all();
        return view('admin.data_makanan',['makanans' => $makanans]);
    }

    function tambah_makanan(){
        $kode = "kode-".rand(0, 100000);
        return view('admin.tambah_makanan',['kode' => $kode]);
    }

    function act_makanan(Request $request){

        $validated = $request->validate([
            'kode' => 'required',
            'nama_makanan' => 'required',
            'harga' =>'required',
            'keterangan' => 'required',
        ]);

        $add = makanan::create([
            'kode' => $request->kode,
            'nama_makanan' => $request->nama_makanan,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan
        ]);

        return redirect('makanan');
    }
}
