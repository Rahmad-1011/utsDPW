<?php 

namespace App\Http\Controllers;
use App\Models\Konten;
use App\Models\Tag;
use App\Models\Komentar;

class clientcontroller extends Controller
{
	function showIndex(){
		$data['list_konten'] = Konten::all();
		$data['list_tag'] = Tag::all();
		return view('Client/index', $data);
	}

	function showAbout(){
		return view('Client/about');
	}
	
	function showContact(){
		return view('Client/contact');
	}

	function filter(){
		$tag = request ('id_tag');
		$data['id_tag'] = $tag;
		$data['list_tag'] = Tag::all();
		$data['list_konten'] = Konten::where('id_tag', "$tag")->get();
		return view('Client/index', $data);
	}
}
