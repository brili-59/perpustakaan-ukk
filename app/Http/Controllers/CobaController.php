<?php

namespace App\Http\Controllers;

use App\Models\Buku;
// use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function tampilkan(){
        $dataBuku = Buku::all();
        // $buuku = DB::table("buku")->get();
        // dd($dataBuku);

        return view("coba", compact(['dataBuku']));
    }

    public function create(){
        return view('create');
    }
    public function store(Request $request){

        // $validate = $request->validate([\__PHP_Incomplete_Class]);
        Buku::create([
            'nama_buku'=> $request->nama_buku,
            'genre'=> $request->genre,
            'synopsis'=> $request->synopsis,
            'harga'=> $request->harga,
            'penerbit'=> $request->penerbit,
        ]);
        return redirect('/coba')->with('success','data berhasil ditambahkan');
    }
}