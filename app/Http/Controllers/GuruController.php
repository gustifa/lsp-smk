<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function Index(){
        $dataGuru = Guru::latest()->get();
        return view('admin.guru.index', compact('dataGuru'));
    }
}
