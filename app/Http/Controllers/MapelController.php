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
}
