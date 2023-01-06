<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblsholat extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function presensi(){
		return $this->belongsTo(UserRfid::class, 'siswa_id', 'Nis');
	}

	// public function jurusan(){
	// 	return $this->belongsTo(Jurusan::class, 'id', 'id');
	// }


}
