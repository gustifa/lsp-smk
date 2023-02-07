<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnitKompetensi;
use App\Models\Jurusan;

class UnitKompetensiController extends Controller
{
    public function LihatUk(){
    	$dataUK = UnitKompetensi::all();
    	$dataJurusan = Jurusan::all();
    	return view('admin.uk.lihat_uk', compact('dataUK', 'dataJurusan'));
    }

    public function SimpanUk(Request $request){
        
      //   $validatedData = $request->validate([
	    	// 	'nama' => 'required|unique:agama,nama',
	    		
	    	// ]);

	    	$data = new UnitKompetensi();
	    	$data->kode_unit = $request->kode_unit;
	    	$data->judul_unit = $request->judul_unit;
	    	$data->jenis_standar = $request->jenis_standar;
	    	$data->id_jurusan = $request->jurusan;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Unit Kompetensi Berhasil ditambahkan',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('lihat.uk')->with($notification);
	    }
}
