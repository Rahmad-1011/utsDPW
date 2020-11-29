<?php 

namespace App\Http\Controllers;
use App\Models\Konten;
use App\Models\Tag;
use App\Models\Komentar;

class postcontroller extends Controller
{
	function showpost(Konten $konten){
		$data['konten'] = $konten;
		return view('Client/post', $data);
	}

	function postkomentar(Komentar $komentar){
		$komentar = Komentar::create($request->all());
		return redirect()->back()->with('succes','Komentar ditambahkan');
	}


}
