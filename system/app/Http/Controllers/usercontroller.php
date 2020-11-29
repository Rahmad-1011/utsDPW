<?php

namespace App\Http\Controllers;
use App\Models\User;

class usercontroller extends Controller {
	function index(){
		$data['list_user'] = User::withCount('konten')->get();
		return view('Admin.User.index', $data);
	}

	function create(){
		return view('Admin.User.create');

	}

	function store(){
		$user = new User;
		$user-> nama = request('nama');
		$user-> username = request('username');
		$user-> email = request('email');
		$user-> password = bcrypt(request('password'));
		$user-> save();


		return redirect ('Admin/user')-> with ('success', 'Data berhasil ditambahkan');

	}


	function show(User $user){
		$data['user'] = $user;
		return view('Admin.User.show', $data);

	}

	function edit(User $user){
		$data['user'] = $user;
		return view('Admin.User.edit', $data);
	}

	function update(User $user){
		$user-> nama = request('nama');
		$user-> username = request('username');
		$user-> email = request('email');
		if(request('password')) $user-> password = bcrypt(request('password'));
		$user-> save();


		return redirect ('Admin/user')-> with ('success', 'Data berhasil diedit');

	}

	function destroy(User $user){
		$user->delete();

		return redirect ('Admin/user')-> with ('danger', 'Data berhasil dihapus');

	}
}