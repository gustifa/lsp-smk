<?php

namespace App\Http\Controllers\Export;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Exports\ExportGuru;
use Maatwebsite\Excel\Facades\Excel;

class ExportGuruController extends Controller
{
    public function ExportGuru(){
    	return new ExportGuru();
    }
}
