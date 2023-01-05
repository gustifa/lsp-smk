<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRfid;

class UserRfidController extends Controller
{
    public function Index(){
        $dataRfid = UserRfid::latest()->get();
        return view('admin.user_rfid.index', compact('dataRfid'));
    }
}
