<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sekolah;

class FrontendController extends Controller
{
    public function frontendHome(){
    	$dataSekolah = Sekolah::find(1);
        return view('frontend.index', compact('dataSekolah'));
    }
}
