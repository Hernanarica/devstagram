<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
	public function index()
	{
		return view('sections.dashboard');
	}
	
	public function __construct()
	{
		// Si el usuario no esta logeado me redirecciona a la vista de login.
		$this->middleware('auth');
	}
}