<?php

namespace App\Models;
use App\Models\Konten;

class Tag extends Model{
	protected $table = 'tag';

	function konten(){
		return $this->hasMany(Konten::class, 'id_tag');
	}
}