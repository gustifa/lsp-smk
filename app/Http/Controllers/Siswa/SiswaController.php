<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    public function SiswaDashboard(){
    	 $adminData = User::where('role','siswa')->get();;
    	return view('siswa.index',compact('adminData'));
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
}
