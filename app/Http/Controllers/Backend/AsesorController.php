<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asesor;
use App\Models\Jurusan;
use App\Models\User;

class AsesorController extends Controller
{
    public function LihatAsesor(){
        $dataAsesor = User::where('role','asesor')->get();
        $dataJurusan = Jurusan::all();
        return view('admin.asesor.lihat_asesor', compact('dataAsesor', 'dataJurusan'));
    }

    public function SimpanAsesor(Request $request){
        // $validatedData = $request->validate([
        //         'nama' => 'required|unique:agama,nama',
                
        //     ]);

            $user = new User();
            $user->username = $request->username;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->jurusan_id = $request->jurusan;
            $user->password = bcrypt(12345678);
            $user->role = 'asesor';
            $user->status = 'active';
            $user->save();

            $notification = array(
                'message' => 'Asesor ditambahkan',
                'alert-type' => 'success'
            );

            return redirect()->route('lihat.asesor')->with($notification);
        }


    
}
