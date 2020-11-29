<?php

namespace App\Models;
use App\Models\Konten;

Class Komentar extends Model{
	protected $table = 'komentar';
	protected $guarded = ['id'];

	function konten(){
		return $this->belongsTo(Konten::class);
	}
}