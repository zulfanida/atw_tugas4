<?php

namespace App\Http\Controllers;




class HomeClientController extends Controller{


	function showBeranda2(){
		return view('beranda2');
	}

	function showProduk2(){
		return view('produk2');
	}

	function showKategori2(){
		return view('kategori2');
	}

	function showLogin2(){
		return view('Login2');
	}


}