<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataCeramahController extends Controller
{
    public function index()
    {
    	// mengambil data dari table dataceramah
    	$dataceramah = DB::table('dataceramah')->get();
 
    	// mengirim data Ceramah ke view index
    	return view('index',['dataceramah' => $dataceramah]); 
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
    
        // memanggil view tambah
        return view('tambah');
    
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('dataceramah')->insert([
            'nama_pembuat' => $request->nama_pembuat,
            'tema_ceramah' => $request->tema_ceramah,
            'judul_ceramah' => $request->judul_ceramah,
            'isi_ceramah' => $request->isi_ceramah,
            'referensi' => $request->referensi
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/dataceramah');
    
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $dataceramah = DB::table('dataceramah')->where('id_ceramah',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['dataceramah' => $dataceramah]);
    
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('dataceramah')->where('id_ceramah',$request->id)->update([
            'nama_pembuat' => $request->nama_pembuat,
            'tema_ceramah' => $request->tema_ceramah,
            'judul_ceramah' => $request->judul_ceramah,
            'isi_ceramah' => $request->isi_ceramah,
            'referensi' => $request->referensi
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/dataceramah');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('dataceramah')->where('id_ceramah',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/dataceramah');
    }
}
