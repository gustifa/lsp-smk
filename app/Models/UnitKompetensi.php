<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnitKompetensi extends Model
{
    use HasFactory;
    protected $table = 'unit_kompetensi';
	protected $primaryKey = 'id';
    protected $guarded = [];

    public function jurusan(){
		return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
	}
}
