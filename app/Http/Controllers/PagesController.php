<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
		return view('index');
	}

    public function about(){
		return view('about');
	}

    public function blog(){
		return view('blog');
	}

    public function contact(){
		return view('contact');
	}

    public function portfolio(){
		return view('portfolio');
	}

    public function service(){
		return view('service');
	}

    public function single(){
		return view('single');
	}

    public function team(){
		return view('team');
	}

	public function pegawai(){
		return view('pegawai');
	}
}
