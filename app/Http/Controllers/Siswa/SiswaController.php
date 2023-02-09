<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Jurusan;
use App\Models\UnitKompetensi;
use PDF;

use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    public function SiswaDashboard(){
        $id = Auth::user()->id;
        $dataSiswa = User::find($id);
    	return view('siswa.index', compact('dataSiswa'));
    }

    public function Profile(){
        $id = Auth::user()->id;
        $profileSiswa = User::find($id);
        return view('siswa.profile', compact('profileSiswa'));
    }

    public function SiswaProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        // $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        // $data->address = $request->address;
        

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/siswa_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/siswa_images'),$filename);
            $data['photo'] = $filename;
        }

        $notification = array(
            'message' => 'Profile Siswa Berhasil Diperbaharui',
            'alert-type' => 'success',
        );

        $data->save();
        return redirect()->back()->with($notification);



        
    }

    public function SiswaLogin(){
        return view('siswa.siswa_login');
    }

     public function SiswaDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    
     /*Formulis APL.02*/
    public function siswaData(){
        $id = Auth::user()->id;
        $dataSiswa = User::find($id);
        $dataJurusan = Jurusan::all();
        return view('siswa.siswa_data', compact('dataSiswa', 'dataJurusan'));

    }

        public function UpdateDataIsian(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
            $data->tempat_lahir = $request->tempat_lahir;
            $data->tanggal_lahir = $request->tanggal_lahir;
            $data->email = $request->email;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->kebangsaan = $request->kebangsaan;
            $data->address = $request->address;
            $data->phone = $request->phone;
            $data->jurusan_id = $request->jurusan;
            $data->pendidikan = $request->pendidikan;
            $data->pekerjaan = $request->pekerjaan;
            $data->jabatan = $request->jabatan;
            $data->alamat_kantor = $request->alamat_kantor;
            $data->kode_pos_kantor = $request->kode_pos_kantor;
            $data->phone_kantor = $request->phone_kantor;
            $data->email_kantor = $request->email_kantor;
            $data->save();

        $notification = array(
            'message' => 'Data Pendaftaran Berhasil Diperbaiki',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);

    }

    public function UpdateData(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
 
            $file = $request->file('kk');
            @unlink(public_path('upload/pendaftaran_images/'.$data->kk));
            $filename = $data->name.'_kk_'.$file->getClientOriginalName();
            $file->move(public_path('upload/pendaftaran_images'),$filename);
            $data['kk'] = $filename;

            $file = $request->file('ktp');
            @unlink(public_path('upload/pendaftaran_images/'.$data->ktp));
            $filename = $data->name.'_ktp_'.$file->getClientOriginalName();
            $file->move(public_path('upload/pendaftaran_images'),$filename);
            $data['ktp'] = $filename;

            $file = $request->file('sertifikat');
            @unlink(public_path('upload/pendaftaran_images/'.$data->sertifikat));
            $filename = $data->name.'_sertifikat_'.$file->getClientOriginalName();
            $file->move(public_path('upload/pendaftaran_images'),$filename);
            $data['sertifikat'] = $filename;
        

        $notification = array(
            'message' => 'SiswaProfile Update Succesfully',
            'alert-type' => 'success',
        );

        $data->save();
        return redirect()->back()->with($notification);

    }

    public function KtpSiswa(){
        $id = Auth::user()->id;
        $dataSiswa = User::find($id);
        $dataJurusan = Jurusan::all();
        return view('siswa.upload_ktp_siswa', compact('dataSiswa', 'dataJurusan'));

    }

    public function UploadKtpSiswa(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
 
            
            $file = $request->file('ktp');
            @unlink(public_path('upload/pendaftaran_images/'.$data->ktp));
            $filename = $data->name.'_ktp_'.$file->getClientOriginalName();
            $file->move(public_path('upload/pendaftaran_images'),$filename);
            $data['ktp'] = $filename;

        $notification = array(
            'message' => 'KTP Berhasil di Upload',
            'alert-type' => 'success',
        );

        $data->save();
        return redirect()->back()->with($notification);

    }

    public function KkSiswa(){
        $id = Auth::user()->id;
        $dataSiswa = User::find($id);
        $dataJurusan = Jurusan::all();
        return view('siswa.upload_kk_siswa', compact('dataSiswa', 'dataJurusan'));

    }

    public function UploadKkSiswa(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
 
            
            $file = $request->file('kk');
            @unlink(public_path('upload/pendaftaran_images/'.$data->kk));
            $filename = $data->name.'_kk_'.$file->getClientOriginalName();
            $file->move(public_path('upload/pendaftaran_images'),$filename);
            $data['kk'] = $filename;

        $notification = array(
            'message' => 'KK Berhasil di Upload',
            'alert-type' => 'success',
        );

        $data->save();
        return redirect()->back()->with($notification);

    }

    public function SertifikatSiswa(){
        $id = Auth::user()->id;
        $dataSiswa = User::find($id);
        $dataJurusan = Jurusan::all();
        return view('siswa.upload_sertifikat_siswa', compact('dataSiswa', 'dataJurusan'));

    }

    public function UploadSertifikatSiswa(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
 
            
            $file = $request->file('sertifikat');
            @unlink(public_path('upload/pendaftaran_images/'.$data->sertifikat));
            $filename = $data->name.'_sertifikat_'.$file->getClientOriginalName();
            $file->move(public_path('upload/pendaftaran_images'),$filename);
            $data['sertifikat'] = $filename;

        $notification = array(
            'message' => 'Sertifikat Berhasil di Upload',
            'alert-type' => 'success',
        );

        $data->save();
        return redirect()->back()->with($notification);

    }

    public function PendaftaranPdf(Request $request){
        $id = Auth::user()->id;
        $allSiswa = User::find($id);
        //$allSiswa = User::all();
        //return view('siswa.pendaftaran_siswa', compact('allSiswa'));
    $pdf = PDF::loadView('siswa.pendaftaran_siswa', compact('allSiswa'));
    // //$pdf->SetProtection(['copy', 'print'], '', 'pass');
    return $pdf->stream('bukti_pendaftaran.pdf');

    }

    public function PendaftaranAdminPdf(Request $request){
        $id = Auth::user()->id;
        $allSiswa = User::find($id);
        $dataUk = UnitKompetensi::all();
        //$allSiswa = User::all();
        // return view('siswa.pendaftaran_admin_siswa', compact('allSiswa'));
    $pdf = PDF::loadView('siswa.pendaftaran_admin_siswa', compact('allSiswa', 'dataUk'));
    $pdf->SetProtection(['copy', 'print'], '', 'pass');
   return $pdf->stream('bukti_pendaftaran.pdf');

    }

    public function CetakPendaftaranAdmin($id){
        $dataUk = User::where('role', 'siswa')->orderBy('id','DESC')->first()->id;
        //$allSiswa = User::all();
        // return view('siswa.pendaftaran_admin_siswa', compact('allSiswa'));
    $pdf = PDF::loadView('siswa.pendaftaran_admin_siswa', compact('allSiswa', 'dataUk'));
    $pdf->SetProtection(['copy', 'print'], '', 'pass');
   return $pdf->stream('bukti_pendaftaran.pdf');

    }

    /*Formulis APL.02*/
    public function siswaDataAsesmen(){
        $id = Auth::user()->id;
        $dataSiswa = User::find($id);
        $dataJurusan = Jurusan::all();
        return view('siswa.siswa_data_asesmen', compact('dataSiswa', 'dataJurusan'));

    }
}
