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

	public function jurusan(){
		return $this->belongsTo(Jurusan::class, 'Jurusan', 'id');
	}

	public function kelas(){
		return $this->belongsTo(Kelas::class, 'Kelas', 'id');
	}

	public function group(){
		return $this->belongsTo(Group::class, 'Group', 'id');
	}



	
}
