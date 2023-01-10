<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function Index(){
        $dataGuru = Guru::latest()->get();
        return view('admin.guru.index', compact('dataGuru'));
    }

    public function SimpanGuru(Request $request){
        
        $validatedData = $request->validate([
	    		'nama' => 'required|unique:guru,nama',
	    		
	    	]);

	    	$data = new Guru();
	    	$data->nama = $request->nama;
	    	$data->nik = $request->nik;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Guru Berhasil ditambahkan',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('lihat.guru')->with($notification);
	    }

	    public function EditGuru($id){
	        $editAgama = Guru::find($id);
	        return view('admin.agama.edit_guru', compact('editGuru'));
    	}

    	public function UpdateGuru(Request $request, $id){
	       $data = Guru::find($id);
     
     		$validatedData = $request->validate([
    		'nama' => 'required|unique:guru,nama,'.$data->id
    		
    		]);

    	
	    	$data->nama = $request->nama;
	    	$data->save();

	    	$notification = array(
	    		'message' => 'Guru Berhasil diperbaharui',
	    		'alert-type' => 'success'
	    	);

	    	return redirect()->route('lihat.agama')->with($notification);
    	}

	    public function HapusGuru($id){
	    	$agama = Guru::find($id);
	    	$agama->delete();

	    	$notification = array(
	    		'message' => 'Guru Berhasil dihapus',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('lihat.guru')->with($notification);

	    }

	    public function template_excel_guru(){
        $path = public_path('/file/excel/import/import_template/template_excel_guru.xlsx');
        $name = basename($path);
        $headers = ["Content-Type:   application/vnd.ms-excel; charset=utf-8"];
        return response()->download($path, $name, $headers);
    }
}
