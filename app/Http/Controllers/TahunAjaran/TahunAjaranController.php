<?php

namespace App\Http\Controllers\TahunAjaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TahunAjaran;

class TahunAjaranController extends Controller
{
   public function LihatTahunAjaran(){
   	$dataTahunAjaran = TahunAjaran::all();
   	return view('admin.tahun_ajaran.lihat_tahunajaran', compact('dataTahunAjaran'));
   }
}
