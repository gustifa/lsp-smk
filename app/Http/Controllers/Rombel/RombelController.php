<?php

namespace App\Http\Controllers\Rombel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rombel;
use App\Models\Kelas;
use App\Models\Jurusan;
use App\Models\Group;

class RombelController extends Controller
{
    public function LihatRombel(){
    	$dataRombel = Rombel::all();
    	return view('admin.rombel.lihat_rombel', compact('dataRombel'));
    }

    public function TambahRombel(){
    	$dataKelas = Kelas::all();
    	$dataJurusan = Jurusan::all();
    	$dataGroup = Group::all();
    	return view('admin.rombel.tambah_rombel', compact('dataKelas', 'dataJurusan', 'dataGroup'));
    }
}
