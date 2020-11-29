<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\Konten;
use App\Models\User;

class tagcontroller extends Controller{
	
	function index(){
		$data['list_tag'] = Tag::withCount('konten')->get();
		return view('Admin.Tag.index', $data);
	}

	function create(){
		return view('Admin.Tag.create');

	}

	function store(){
		$tag = new tag;
		$tag-> nama = request('nama');
		$tag-> save();

		return redirect ('Admin/tag')-> with ('success', 'Data berhasil ditambahkan');

	}

	function show(Tag $tag){
		$data['tag'] = $tag;
		return view('Admin.Tag.show', $data);

	}

	function edit(Tag $tag){
		$data['tag'] = $tag;
		return view('Admin.Tag.edit', $data);
	}

	function update(Tag $tag){
		$tag-> nama = request('nama');
		$tag-> save();

		return redirect ('Admin/tag')-> with ('success', 'Data berhasil diedit');

	}

	function destroy(Tag $tag){
		$tag->delete();

		return redirect ('Admin/tag')-> with ('danger', 'Data berhasil dihapus');
	}

}