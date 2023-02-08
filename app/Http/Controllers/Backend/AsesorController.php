<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asesor;
use App\Models\Jurusan;

class AsesorController extends Controller
{
    public function LihatAsesor(){
        $dataAsesor = Asesor::all();
        $dataJurusan = Jurusan::all();
        return view('admin.asesor.lihat_asesor', compact('dataAsesor', 'dataJurusan'));
    }

    public function SimpanAsesor(Request $request){
        // $validatedData = $request->validate([
        //         'nama' => 'required|unique:agama,nama',
                
        //     ]);

            $asesor = User::where('role','asesor')->orderBy('id','DESC')->first();

        if ($asesor == null) {
            $firstReg = 0;
            $asesorId = $firstReg+1;
            if ($asesorId < 10) {
                $id_no = '000'.$asesorId;
            }elseif ($asesorId < 100) {
                $id_no = '00'.$asesorId;
            }elseif ($asesorId < 1000) {
                $id_no = '0'.$asesorId;
            }
        }else{
     $asesor = User::where('role','asesor')->orderBy('id','DESC')->first()->id;
        $asesorId = $asesor+1;
        if ($asesorId < 10) {
                $id_no = '000'.$asesorId;
            }elseif ($asesorId < 100) {
                $id_no = '00'.$asesorId;
            }elseif ($asesorId < 1000) {
                $id_no = '0'.$asesorId;
            }
        }

            $user = new User();
            $user->username = $request->username;
            $user->password = bcrypt(12345678);
            $user->role = 'asesor';
            $user->status = 'active';
            $user->save();

            $data = new Asesor();
            $data->id_jurusan = $request->jurusan;
            $data->id_user = $id_no;
            $data->save();

            $notification = array(
                'message' => 'Agama Berhasil ditambahkan',
                'alert-type' => 'success'
            );

            return redirect()->route('lihat.agama')->with($notification);
        }


    
}
