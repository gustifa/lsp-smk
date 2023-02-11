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
         $dataLsp = User::where('role','siswa')->get();
         //$editdataLsp = User::where('role','siswa')->select();
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

	public function AdminDaftarSimpan(Request $request){
        $validatedData = $request->validate([
                // 'name' => 'required|unique:users,name',
                'username' => 'required|unique:users,username',
                'nik' => 'required|unique:users,nik|min:16|max:16 ',
                
            ]);
        $student = User::where('role','siswa')->orderBy('id','DESC')->first();

        if ($student == null) {
            $firstReg = 0;
            $studentId = $firstReg+1;
            if ($studentId < 10) {
                $id_no = '000'.$studentId;
            }elseif ($studentId < 100) {
                $id_no = '00'.$studentId;
            }elseif ($studentId < 1000) {
                $id_no = '0'.$studentId;
            }
        }else{
     $student = User::where('role','siswa')->orderBy('id','DESC')->first()->id;
        $studentId = $student+1;
        if ($studentId < 10) {
                $id_no = '000'.$studentId;
            }elseif ($studentId < 100) {
                $id_no = '00'.$studentId;
            }elseif ($studentId < 1000) {
                $id_no = '0'.$studentId;
            }

        }
        $date = date("Y"); 
        $final_id_no = $date.($id_no);
        $user = new User();
        $user->no_pendaftaran = $final_id_no;
        $user->name = strtoupper($request->name);
        $user->nik = $request->nik;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->password = bcrypt($request->password);
        $user->role = 'siswa';
        $user->status = 'active';

        $user->save();

        $notification = array(
                'message' => 'Daftar Berhasil ditambahkan',
                'alert-type' => 'success'
            );

        return redirect()->back()->with($notification);


    }


}
