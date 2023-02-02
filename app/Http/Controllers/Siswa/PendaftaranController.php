<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\User;


class PendaftaranController extends Controller
{
    public function Daftar(){
    	$dataJurusan = Jurusan::all();
    	return view('siswa.register_siswa', compact('dataJurusan'));
    }

    public function DaftarSimpan(Request $request){
    	//$student = User::where('role','siswa')->orderBy('id','DESC')->first();
    	$user = new User();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->username = $request->username;
    	$user->password = bcrypt($request->password);
    	$user->role = 'siswa';
    	$user->status = 'active';

    	$user->save();

    	$notification = array(
    		'message' => 'Siswa Berhasil Mendaftar',
    		'alert-type' => 'success'
    	);

    	return redirect()->back()->with($notification);


    }
}
