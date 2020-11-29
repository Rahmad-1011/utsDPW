<?php 

namespace App\Http\Controllers;
use App\Models\User;

class homecontroller extends Controller
{
	
	function showBeranda(){
		return view('Admin/beranda');
	}
	

}
