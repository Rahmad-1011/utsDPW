<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;

class authcontroller extends Controller
{
	function showLogin(){
		return view('Admin/login');

	}
	
	function create(){
		return view('Admin/register');

	}
	function LoginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('Admin/beranda')-> with('success', 'Login Berhasil');
			}else{
				return back()-> with('danger', 'Silahkan cek email dan password anda');
			}

	}

	function register(){
		$user = new user;
		$user-> nama = request('nama');
		$user-> username = request('username');
		$user-> email = request('email');
		$user-> password = bcrypt(request('password'));
		$user-> save();

		return redirect ('Admin/login')-> with ('success', 'Registrasi berhasil');
	}

	function destory(){
		Auth::logout();
		return view('Admin/login');

	}

}