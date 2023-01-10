<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mapel;

class MapelController extends Controller
{
    public function Index(){
        $dataMapel = Mapel::latest()->get();
        return view('admin.mapel.index', compact('dataMapel'));
    }

    public function template_excel_mapel(){
        $path = public_path('/file/excel/import/import_template/template_excel_mapel.xlsx');
        $name = basename($path);
        $headers = ["Content-Type:   application/vnd.ms-excel; charset=utf-8"];
        return response()->download($path, $name, $headers);
    }
}
