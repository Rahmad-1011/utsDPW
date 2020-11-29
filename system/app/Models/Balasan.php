<?php

namespace App\Models;

Class Komentar extends Model{
	protected $table = 'balasan';
	function balasan(){
		return $this->hasOne(Komentar::class, 'id_balasan');
	}
}