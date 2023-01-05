<?php

namespace App\Http\Controllers\Jurusan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function LihatJurusan(){
    	$dataJurusan = Jurusan::all();
    	return view('admin.jurusan.lihat_jurusan', compact('dataJurusan'));
    }
}
