<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// panggil model pegawai
use App\Models\Pegawai;


class PegawaiController extends Controller
{
    public function index()
    {
        // mengambil data pegawai yang pertama
        // $pegawai = Pegawai::first();
        
        // mengambil data pegawai yang id nya 1
        // $pegawai = Pegawai::find(1);

        // mengambil data pegawai yang bernama Jamal Uwais
        // $pegawai = Pegawai::where('nama', '=', 'Jamal Uwais')->get();
        // $pegawai = Pegawai::where('nama', '=', 'Tiara Olivia Utami')->get();

        // mengambil data pegawai yang id nya lebih besar dari 10
        // $pegawai = Pegawai::where('id', '>', 10)->get();

        // mengambil data pegawai yang id nya lebih besar sama dengan 10 
        // $pegawai = Pegawai::where('id', '>=', 10)->get();

        // mengambil data pegawai yang di namanya ada huruf a 
        // $pegawai = Pegawai::where('nama', 'like', '%a%')->get();

        // menampilkan 10 data pegawai per halaman
        // $pegawai = Pegawai::paginate(10);
        // $pegawai = Pegawai::paginate(5);
    	
        // mengambil data pegawai
    	$pegawai = Pegawai::all();

    	// mengirim data pegawai ke view pegawai
    	return view('pegawai', ['pegawai' => $pegawai]);
    }

}

        