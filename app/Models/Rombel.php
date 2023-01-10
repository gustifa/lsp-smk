<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    use HasFactory;
    protected $table = 'rombel';
	protected $primaryKey = 'id';
    protected $guarded = [];

    public function walas(){
		return $this->belongsTo(Guru::class, 'guru_id', 'id');
	}
}
