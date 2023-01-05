<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';
	protected $primaryKey = 'id';
    protected $guarded = [];

    public function guru(){
		return $this->belongsTo(UserRfid::class, 'siswa_id', 'Nis');
	}
}
