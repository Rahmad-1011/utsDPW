<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientcontroller;
use App\Http\Controllers\tagcontroller;
use App\Http\Controllers\kontencontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\postcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::prefix('Client')->group(function(){
	//beranda
	Route::get('index', [clientcontroller::class, 'showIndex']);
	Route::post('index/filter', [clientcontroller::class, 'filter']);
	//kategori
	Route::get('about', [clientcontroller::class, 'showAbout']);
	//
	Route::get('contact', [clientcontroller::class, 'showContact']);
	//
	Route::get('post/{konten}', [postcontroller::class, 'showpost']);
	Route::post('post/{konten}', [postcontroller::class, 'postkomentar']);

});

Route::prefix('Admin')->group(function(){
	//beranda
	Route::get('beranda', [homecontroller::class, 'showBeranda']);
	//kategori
	Route::resource('tag', tagcontroller::class);
	//produk
	Route::resource('konten', kontencontroller::class);
	Route::post('konten/filter', [kontencontroller::class, 'filter']);
	//user 
	Route::resource('user', usercontroller::class);
	//Login_admin
	Route::get('login', [authcontroller::class, 'showLogin'])->name('login');

	Route::post('login', [authcontroller::class, 'LoginProcess']);

	Route::get('register', [authcontroller::class, 'create']);

	Route::post('register', [authcontroller::class, 'register']);

	Route::get('logout', [authcontroller::class, 'destory']);
});