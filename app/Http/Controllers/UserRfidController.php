<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRfid;

class UserRfidController extends Controller
{
    public function Index(){
        $dataRfid = UserRfid::latest()->get();
        //$dataRfid = UserRfid::all();
        return view('admin.user_rfid.index', compact('dataRfid'));
    }

    public function template_excel_userrfid()
    {
        $path = public_path('/file/excel/import/import_template/template_excel_userrfid.xlsx');
        $name = basename($path);
        $headers = ["Content-Type:   application/vnd.ms-excel; charset=utf-8"];
        return response()->download($path, $name, $headers);
    }
}
