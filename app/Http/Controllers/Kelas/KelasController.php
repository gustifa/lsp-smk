<?php

namespace App\Http\Controllers\Kelas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function LihatKelas(){
    	$dataKelas = Kelas::all();
    	return view('admin.kelas.lihat_kelas', compact('dataKelas'));
    }
}
