<?php

namespace App\Http\Controllers\Import;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

use App\Imports\ImportUserRfid;
use App\Imports\ImportGuru;

class ImportController extends Controller
{
    public function LihatImportUserRfid(Request $request){
        return view('admin.import.import_userrfid');
    }

    public function importUserRfid(Request $request){

      //   $validatedData = $request->validate([
	    	// 	'Nis' => 'required|unique:user,Nis',
	    		
	    	// ]);
    	$notification = array(
	    		'message' => 'UserRfidBerhasil ditambahkan',
	    		'alert-type' => 'success'
	    	);

        Excel::import(new ImportUserRfid, $request->file('file')->store('files'));
        return redirect()->route('lihat.user')->with($notification);


    }

    public function LihatImportGuru(Request $request){
        return view('admin.import.import_guru');
    }

    public function ImportGuru(Request $request){

      //   $validatedData = $request->validate([
	    	// 	'Nis' => 'required|unique:user,Nis',
	    		
	    	// ]);
    	$notification = array(
	    		'message' => 'UserRfidBerhasil ditambahkan',
	    		'alert-type' => 'success'
	    	);

        Excel::import(new ImportUserRfid, $request->file('file')->store('files'));
        return redirect()->route('lihat.user')->with($notification);


    }
}
