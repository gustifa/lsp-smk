<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function LihatGroup(){
    	$dataGroup = Group::all();
    	return view('admin.group.lihat_group', compact('dataGroup'));
    }
}
