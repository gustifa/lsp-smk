<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\tblsholat;


class PresensiController extends Controller
{
    public function LihatPresensi(){
        $dataPresensi = tblsholat::latest()->get();
        return view('presensi.presensi_view', compact('dataPresensi'));
    }
}
