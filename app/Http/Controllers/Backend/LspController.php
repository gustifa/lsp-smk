<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LspController extends Controller
{
    public function LihatDataLsp(){
         // $adminData = User::all();
    	 // $id = Auth::user()->id;
      //    $dataSiswa = User::find($id);
         $dataLsp = User::where('role','siswa')->get();;
         // $dataLsp = User::all();
         
        return view('admin.lsp.lihat_data_lsp',compact('dataLsp'));
    }

    public function HapusDataLsp($id){
	    	$data = User::find($id);
	    	$data->delete();

	    	$notification = array(
	    		'message' => 'Data LSP Berhasil dihapus',
	    		'alert-type' => 'info'
	    	);

	    	return redirect()->route('data.lsp')->with($notification);

	    }

	 public function EditDataLsp($id){
	    	$dataLsp = User::find($id);
	    	return view('admin.lsp.edit_data_lsp', compact('dataLsp'));

	    }
}
