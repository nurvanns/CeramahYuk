<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenceramahController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$datapenceramah = DB::table('datapenceramah')->get();
 
    	// mengirim data pegawai ke view index
    	return view('penceramah',['datapenceramah' => $datapenceramah]); 
	}
	
	public function tambah()
    {
    
        // memanggil view tambah
        return view('ptambah');    
	}
	
	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('datapenceramah')->insert([
			'nama_penceramah' => $request->nama_penceramah,
			'jenis_kelamin' => $request->jenis_kelamin,
			'no_telepon' => $request->no_telepon,
			'alamat' => $request->alamat,
			'tarif' => $request->tarif
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/datapenceramah');
	
	}

	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$datapenceramah = DB::table('datapenceramah')->where('id_penceramah',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('pedit',['datapenceramah' => $datapenceramah]);
	
	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('datapenceramah')->where('id_penceramah',$request->id)->update([
			'nama_penceramah' => $request->nama_penceramah,
			'jenis_kelamin' => $request->jenis_kelamin,
			'no_telepon' => $request->no_telepon,
			'alamat' => $request->alamat,
			'tarif' => $request->tarif
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/datapenceramah');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('datapenceramah')->where('id_penceramah',$id)->delete();
			
		// alihkan halaman ke halaman pegawai
		return redirect('/datapenceramah');
	}
}
