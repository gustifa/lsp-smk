<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sekolah;
use App\Models\Setting;

class FrontendController extends Controller
{
    public function frontendHome(){
    	$dataSekolah = Sekolah::find(1);
        $dataSetting = Setting::find(1);
        return view('frontend.index', compact('dataSekolah', 'dataSetting'));
    }
}
