<?php

namespace App\Models;
use App\Models\User;
use App\Models\Tag;
use App\Models\Komentar;
use App\Models\Balas;

class Konten extends Model{
	protected $table = 'konten';

	function penulis(){
		return $this->belongsTo(User::class, 'id_user');
	}
	function tag(){
		return $this->belongsTo(Tag::class, 'id_tag');
	}
	function komentar(){
		return $this->belongsTo(Komentar::class, 'id_komentar');
	}
	function balas(){
		return $this->belongsTo(Balas::class, 'id_balas');
	}
}