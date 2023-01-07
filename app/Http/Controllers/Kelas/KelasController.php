<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function LihatKelas(){
    	// $dataKelas = Kelas::all();
    	$dataKelas = Kelas::orderBy('id','asc')->get();
    	return view('admin.kelas.lihat_kelas', compact('dataKelas'));
    }

    public function TambahKelas(){
        
        return view('admin.kelas.tambah_kelas');
    }

    public function SimpanKelas(Request $request){
        
        $validatedData = $request->validate([
	    		'nama' => 'required|unique:kelas,nama',
	    		
	    	]);

	    	$data = new Kelas();
	    	$data->nama = $request->nama;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Kelas Berhasil ditambahkan',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('lihat.kelas')->with($notification);
	    }

	    public function EditKelas($id){
	        $editKelas = Kelas::find($id);
	        return view('admin.kelas.edit_kelas', compact('editKelas'));
    	}

    	public function UpdateKelas(Request $request, $id){
	       $data = Kelas::find($id);
     
     		$validatedData = $request->validate([
    		'nama' => 'required|unique:kelas,nama,'.$data->id
    		
    		]);

    	
	    	$data->nama = $request->nama;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Kelas Berhasil diperbaharui',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('lihat.kelas')->with($notification);
    	}

	    public function HapusKelas($id){
	    	$agama = Kelas::find($id);
	    	$agama->delete();

	    	$notification = array(
	    		'message' => 'Kelas Berhasil dihapus',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('lihat.kelas')->with($notification);

	    }
}
