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
        $validatedData = $request->validate([
                'name' => 'required|unique:users,name',
                'username' => 'required|unique:users,username',
                'nik' => 'required|unique:users,nik',
                
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
        $user->tempat_lahir = $request->tempat_lahir;
        $user->tanggal_lahir = $request->tanggal_lahir;
    	$user->email = $request->email;
    	$user->username = $request->username;
    	$user->password = bcrypt($request->password);
    	$user->role = 'siswa';
    	$user->status = 'active';

    	$user->save();

        $notification = array(
                'message' => 'Agama Berhasil diperbaharui',
                'alert-type' => 'success'
            );

    	return redirect()->route('siswa.login')->with($notification);


    }
}
