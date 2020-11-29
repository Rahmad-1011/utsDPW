<?php

namespace App\Http\Controllers;
use App\Models\Konten;
use App\Models\User;
use App\Models\Tag;

class kontencontroller extends Controller {
	function index(){
		$user = request()->User();
		$data['list_konten'] = $user->konten;
		$data['list_tag'] = Tag::all();
		return view('Admin.Konten.index', $data);
	}

	function create(){
		$data['list_tag'] = Tag::all();
		return view('Admin.Konten.create', $data);

	}

	function store(){
		$konten = new Konten;
		$konten-> id_user = request()->user()->id;
		$konten-> judul = request('judul');
		$konten-> id_tag = request('id_tag');
		$konten-> sub_isi = request('sub_isi');
		$konten-> isi = request('isi');
		$konten-> save();

		return redirect ('Admin/konten')-> with ('success', 'Konten berhasil ditambahkan');

	}

	function show(Konten $konten){
		$data['konten'] = $konten;
		return view('Admin.Konten.show', $data);

	}

	function edit(Konten $konten){
		$data['list_tag'] = Tag::all();
		$data['konten'] = $konten;
		return view('Admin.Konten.edit', $data);
	}

	function update(Konten $konten){
		$konten-> judul = request('judul');
		$konten-> id_tag = request('id_tag');
		$konten-> sub_isi = request('sub_isi');
		$konten-> isi = request('isi');
		$konten-> save();

		return redirect ('Admin/konten')-> with ('success', 'Konten berhasil diedit');

	}

	function destroy(Konten $konten){
		$konten->delete();

		return redirect ('Admin/konten')-> with ('danger', 'Data berhasil dihapus');

	}

	function filter(){
		$tag = request ('id_tag');
		$data['id_tag'] = $tag;
		$data['list_tag'] = Tag::all();
		$data['list_konten'] = Konten::where('id_tag', "$tag")->get();
		return view('Admin.Konten.index', $data);
	}
}