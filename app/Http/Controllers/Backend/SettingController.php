<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function LihatSetting(){

        $dataSetting = Setting::all();
        return view('admin.setting.lihat_setting', compact('dataSetting'));
    }

    public function EditSetting($id){
            $editSetting = Setting::find($id);
            return view('admin.setting.edit_setting', compact('editSetting'));
    }

    public function UpdateSetting(Request $request, $id){
           $data = Setting::find($id);
     
            // $validatedData = $request->validate([
            // 'nama' => 'required|unique:ag,nama,'.$data->id
            
            // ]);

        
            $data->nama = $request->nama;
            $data->judul1 = $request->judul1;
            $data->judul2 = $request->judul2;
            $data->alamat = $request->alamat;
            $data->save();

            $notification = array(
                'message' => 'Settingan Berhasil diperbaharui',
                'alert-type' => 'success'
            );

            return redirect()->route('lihat.setting')->with($notification);
    }

}
