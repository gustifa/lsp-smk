<?php

namespace App\Http\Controllers\Jurusan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function LihatJurusan(){
    	// $dataJurusan = Jurusan::all();
    	$dataJurusan = Jurusan::orderBy('id','asc')->get();
    	return view('admin.jurusan.lihat_jurusan', compact('dataJurusan'));
    }

    public function TambahJurusan(){
        
        return view('admin.jurusan.tambah_jurusan');
    }

    public function SimpanJurusan(Request $request){
        
        $validatedData = $request->validate([
	    		'nama' => 'required|unique:jurusan,nama',
	    		
	    	]);

	    	$data = new Jurusan();
	    	$data->nama = $request->nama;
	    	$data->kode = $request->kode;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Jurusan Berhasil ditambahkan',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('lihat.jurusan')->with($notification);
	    }

	    public function EditJurusan($id){
	        $editJurusan = Jurusan::find($id);
	        return view('admin.jurusan.edit_jurusan', compact('editJurusan'));
    	}

    	public function UpdateJurusan(Request $request, $id){
	       $data = Jurusan::find($id);
     
     		$validatedData = $request->validate([
    		'nama' => 'required|unique:jurusan,nama,'.$data->id
    		
    		]);

    	
	    	$data->nama = $request->nama;
	    	$data->kode = $request->kode;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Jurusan Berhasil diperbaharui',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('lihat.jurusan')->with($notification);
    	}

	    public function HapusJurusan($id){
	    	$agama = Jurusan::find($id);
	    	$agama->delete();

	    	$notification = array(
	    		'message' => 'Jurusan Berhasil dihapus',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('lihat.jurusan')->with($notification);

	    }
}
