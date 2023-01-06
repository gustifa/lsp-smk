<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exports\UsersExport;
use App\Exports\ExsportUserRfid;
use Maatwebsite\Excel\Facades\Excel;


class UserController extends Controller
{
    public function ExportUser(){
    	return new UsersExport();
    }

    public function ExportUserRfid(){
    	return new ExsportUserRfid();
    }

    
}
